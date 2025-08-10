<?php
declare(strict_types=1);

// RAG generator — see UPDATE.md for usage

function arg(string $name, array $argv, ?string $default = null): ?string {
    foreach ($argv as $a) { if (str_starts_with($a, "--{$name}=")) return substr($a, strlen("--{$name}=")); }
    return $default;
}

function normalize_method(string $token): string { return preg_replace('/\s+/', '', strtolower(trim($token))); }
function method_scope(string $m): string { return explode('.', $m, 2)[0] ?? ''; }
function is_task_legacy(string $m): bool { return str_starts_with($m,'task.item.')||str_starts_with($m,'task.items.')||str_starts_with($m,'task.commentitem.')||str_starts_with($m,'task.checklistitem.')||str_starts_with($m,'task.elapseditem.'); }

function collect_methods_from_markdown(string $content): array {
    preg_match_all('/\b([a-z][a-z0-9_]*\.[a-z0-9_]+(?:\.[a-z0-9_]+)+)\b/iu', $content, $m);
    $allowed = ['crm','tasks','task','disk','user','im','lists','bizproc','sonet_group','sale','catalog','calendar','telephony','timeman','imopenlines','documentgenerator','biconnector','landing','mailservice','messageservice','department','entity','files','oauth'];
    $out = [];
    foreach ($m[1] as $tok) { $meth = normalize_method((string)$tok); $scope = method_scope($meth); if ($scope && in_array($scope,$allowed,true)) $out[$meth]=true; }
    return array_keys($out);
}

function detect_pagination(string $m): string {
    $m = strtolower($m);
    if (str_starts_with($m,'crm.') && str_ends_with($m,'.list')) return 'start';
    if ((str_starts_with($m,'task.')||str_starts_with($m,'tasks.')) && (str_contains($m,'.getlist')||str_ends_with($m,'.list'))) return 'nav_params';
    if (preg_match('/\.(get|add|update|delete|fields|types)$/',$m)) return 'none';
    return 'unknown';
}

function extract_curl_example(string $content, string $method): ?string {
    $pat = preg_quote($method,'/');
    if (preg_match('/```(?:bash|shell|curl)?[\r\n]+([\s\S]*?curl[\s\S]*?\/rest\/'.$pat.'[\s\S]*?)```/i',$content,$m)) return trim($m[1]);
    if (preg_match('/\bcurl[\s\S]*?\/rest\/'.$pat.'[^\r\n]*/i',$content,$m)) return trim($m[0]);
    return null;
}

function ensure_dir(string $p): void { if (!is_dir($p)) mkdir($p,0777,true); }
function load_index(string $p): array { if(!file_exists($p)) return ['version'=>1,'methods'=>[]]; $j=json_decode((string)file_get_contents($p),true); return is_array($j)?$j:['version'=>1,'methods'=>[]]; }
function save_index(string $p, array $idx): void { file_put_contents($p, json_encode($idx, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES)); }

function detect_deprecated(string $path, string $content): bool { $lp=strtolower($path); if(str_contains($lp,DIRECTORY_SEPARATOR.'outdated'.DIRECTORY_SEPARATOR)) return true; $h=strtolower(substr($content,0,5000)); return str_contains($h,'deprecated')||str_contains($h,'устарев'); }
function derive_params_schema(string $m): array { $m=strtolower($m); if(is_task_legacy($m)) return ['type'=>'array','positional'=>['order','filter','select','params']]; if(str_ends_with($m,'.list')||str_contains($m,'.getlist')) return ['type'=>'object','properties'=>['filter'=>['type'=>'object'],'order'=>['type'=>'object'],'select'=>['type'=>'array','items'=>['type'=>'string']],'start'=>['type'=>['integer','string']]]]; if(preg_match('/\.(get|delete)$/',$m)) return ['type'=>'object','required'=>['id'],'properties'=>['id'=>['type'=>'integer']]]; if(preg_match('/\.add$/',$m)) return ['type'=>'object','required'=>['fields'],'properties'=>['fields'=>['type'=>'object']]]; if(preg_match('/\.update$/',$m)) return ['type'=>'object','required'=>['id','fields'],'properties'=>['id'=>['type'=>'integer'],'fields'=>['type'=>'object']]]; return ['type'=>'object']; }
function derive_return_schema(string $m): array { $m=strtolower($m); if(str_ends_with($m,'.list')||str_contains($m,'.getlist')) return ['type'=>'array','items'=>['type'=>'object']]; return ['type'=>'object']; }

function write_method_stub(string $outDir, string $method, bool $deprecated, array $aliases=[], ?string $exampleCurl=null, ?string $importMd=null): string {
    $scope = method_scope($method); $dir=rtrim($outDir,'/\\').DIRECTORY_SEPARATOR.'methods'.DIRECTORY_SEPARATOR.$scope; ensure_dir($dir);
    $file = $dir.DIRECTORY_SEPARATOR.$method.'.md'; $should=true; if(file_exists($file)){ $ex=(string)file_get_contents($file); if($ex!=='' && !str_contains($ex,'Auto-generated stub')) $should=false; }
    if($should){
        $front=['method'=>$method,'scope'=>$scope,'deprecated'=>$deprecated,'aliases'=>$aliases,'rate_limit_per_sec'=>2,'pagination'=>detect_pagination($method),'params'=>derive_params_schema($method),'returns'=>derive_return_schema($method)];
        $yaml="---\n"; foreach($front as $k=>$v){ if(is_bool($v)) $yaml.=sprintf("%s: %s\n",$k,$v?'true':'false'); elseif(is_array($v)) $yaml.=sprintf("%s: %s\n",$k,json_encode($v,JSON_UNESCAPED_UNICODE)); else $yaml.=sprintf("%s: %s\n",$k,$v);} $yaml.="---\n\n";
        $body="Auto-generated stub. Fill in params/returns/examples.\n";
        if($exampleCurl){ $body.="\nExample (curl):\n\n```bash\n".$exampleCurl."\n```\n"; }
        if($importMd){
            // Append source markdown from api-reference (best-effort). Strip some templating tags.
            $clean = preg_replace('/\{\%[^\n]*\%\}|\{\{[^\n]*\}\}/u','', $importMd);
            $body .= "\n---\n\n".$clean."\n";
        }
        file_put_contents($file,$yaml.$body);
    }
    return $file;
}

function main(array $argv): void {
    $src = arg('source',$argv,'../b24-rest-docs/api-reference');
    $out = arg('out',$argv,'.');
    if(!is_dir($src)) { fwrite(STDERR,"source not found: {$src}\n"); exit(2);} ensure_dir($out);
    $indexPath=rtrim($out,'/\\').DIRECTORY_SEPARATOR.'rest-index.json'; $index=load_index($indexPath); $existing=[]; foreach(($index['methods']??[]) as $m){ if(isset($m['method'])) $existing[$m['method']]=$m; }
    $rii=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($src, FilesystemIterator::SKIP_DOTS)); $found=[];
    foreach($rii as $f){ if(!$f->isFile()) continue; if(strtolower($f->getExtension())!=='md') continue; $p=$f->getPathname(); $c=(string)file_get_contents($p); $methods=collect_methods_from_markdown($c); $dep=detect_deprecated($p,$c); foreach($methods as $meth){ $found[$meth]=['deprecated'=>$dep,'source'=>$p,'example'=>extract_curl_example($c,$meth),'md'=>$c]; }}
    $aliases=['task.items.getlist'=>['tasks.task.list'],'task.item.list'=>['tasks.task.list','task.items.getlist'],'tasks.task.list'=>['task.items.getlist','task.item.list']];
    $added=0; $updated=0; foreach($found as $meth=>$meta){ $al=$aliases[$meth]??[]; write_method_stub($out,$meth,$meta['deprecated'],$al,$meta['example']??null, $meta['md']??null); $rel=str_replace(['\\','/'],DIRECTORY_SEPARATOR,'methods/'.method_scope($meth).'/'.$meth.'.md'); $e=['method'=>$meth,'scope'=>method_scope($meth),'path'=>$rel,'deprecated'=>$meta['deprecated'],'pagination'=>detect_pagination($meth),'has_example'=>($meta['example']??null)!==null]; if(!empty($al)) $e['aliases']=$al; if(!isset($existing[$meth])){ $index['methods'][]=$e; $added++; } else { foreach($index['methods'] as &$m){ if(($m['method']??'')===$meth){ $m=array_merge($m,$e); $updated++; break; } } } }
    save_index($indexPath,$index); echo "Scanned: ".count($found)." methods; added: {$added}, updated: {$updated}.\n";
}

main($_SERVER['argv'] ?? []);
