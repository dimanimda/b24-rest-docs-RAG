<?php
declare(strict_types=1);

// Enrich RAG docs from Bitrix core PHP sources (restservice.php files)
// Usage:
// php enrich_from_core.php --core="C:/path/to/bitrix24-core-corp/modules" --out="."

function arg(string $name, array $argv, ?string $default=null): ?string {
    foreach ($argv as $a) { if (str_starts_with($a, "--{$name}=")) return substr($a, strlen("--{$name}=")); }
    return $default;
}

function ensure_dir(string $p): void { if (!is_dir($p)) mkdir($p,0777,true); }

function load_index(string $p): array { if(!file_exists($p)) return ['version'=>1,'methods'=>[]]; $j=json_decode((string)file_get_contents($p),true); return is_array($j)?$j:['version'=>1,'methods'=>[]]; }
function save_index(string $p, array $idx): void { file_put_contents($p, json_encode($idx, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES)); }

function method_scope(string $m): string { return explode('.', strtolower($m), 2)[0] ?? ''; }

function detect_pagination(string $method): string {
    $m = strtolower($method);
    if (str_starts_with($m,'crm.') && str_ends_with($m,'.list')) return 'start';
    if ((str_starts_with($m,'task.')||str_starts_with($m,'tasks.')) && (str_contains($m,'.getlist')||str_ends_with($m,'.list'))) return 'nav_params';
    if (preg_match('/\.(get|add|update|delete|fields|types)$/',$m)) return 'none';
    return 'unknown';
}

function write_stub(string $outDir, string $method): void {
    $scope = method_scope($method);
    $dir = rtrim($outDir,'/\\').DIRECTORY_SEPARATOR.'methods'.DIRECTORY_SEPARATOR.$scope;
    ensure_dir($dir);
    $file = $dir.DIRECTORY_SEPARATOR.$method.'.md';
    if (file_exists($file)) return; // keep existing
    $front = [
        'method' => $method,
        'scope' => $scope,
        'deprecated' => false,
        'aliases' => [],
        'rate_limit_per_sec' => 2,
        'pagination' => detect_pagination($method),
        'params' => str_contains($method,'.list')||str_contains($method,'.getlist')
            ? ['type'=>'object','properties'=>['filter'=>['type'=>'object'],'order'=>['type'=>'object'],'select'=>['type'=>'array','items'=>['type'=>'string']],'start'=>['type'=>['integer','string']]]]
            : ['type'=>'object'],
        'returns' => (str_contains($method,'.list')||str_contains($method,'.getlist'))? ['type'=>'array','items'=>['type'=>'object']] : ['type'=>'object'],
    ];
    $yaml = "---\n"; foreach ($front as $k=>$v) { if (is_bool($v)) $yaml.=sprintf("%s: %s\n",$k,$v?'true':'false'); elseif(is_array($v)) $yaml.=sprintf("%s: %s\n",$k,json_encode($v,JSON_UNESCAPED_UNICODE)); else $yaml.=sprintf("%s: %s\n",$k,$v);} $yaml.="---\n\n";
    $body = "Auto-generated stub. Fill in params/returns/examples.\n";
    file_put_contents($file, $yaml.$body);
}

function main(array $argv): void {
    $core = arg('core',$argv,null);
    $out = arg('out',$argv,'.');
    if ($core===null || !is_dir($core)) { fwrite(STDERR,"--core directory required\n"); exit(2);} ensure_dir($out);
    $indexPath = rtrim($out,'/\\').DIRECTORY_SEPARATOR.'rest-index.json';
    $index = load_index($indexPath); $existing=[]; foreach(($index['methods']??[]) as $m){ if(isset($m['method'])) $existing[$m['method']]=$m; }
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($core, FilesystemIterator::SKIP_DOTS));
    $found = [];
    foreach ($rii as $f) {
        if(!$f->isFile()) continue; $name=strtolower($f->getFilename()); if (strpos($name,'rest')===false) continue; if ($f->getExtension()!=='php') continue;
        $c = (string)file_get_contents($f->getPathname());
        // find tokens like crm.deal.get or tasks.task.list etc
        if (preg_match_all('/\b([a-z][a-z0-9_]*\.[a-z0-9_]+(?:\.[a-z0-9_]+)+)\b/iu',$c,$m)){
            foreach ($m[1] as $tok) { $meth=strtolower((string)$tok); $found[$meth]=true; }
        }
    }
    $added=0; $updated=0; $touched=0;
    foreach (array_keys($found) as $method) {
        $scope = method_scope($method); if ($scope==='') continue;
        $rel = 'methods/'.$scope.'/'.$method.'.md';
        write_stub($out,$method);
        $entry = ['method'=>$method,'scope'=>$scope,'path'=>$rel,'deprecated'=>false,'pagination'=>detect_pagination($method)];
        if (!isset($existing[$method])) { $index['methods'][]=$entry; $added++; }
        else { foreach ($index['methods'] as &$m) { if (($m['method']??'')===$method) { $m = array_merge($m,$entry); $updated++; break; } } }
        $touched++;
    }
    save_index($indexPath,$index);
    echo "Core scan: methods= {$touched}; added={$added}, updated={$updated}.\n";
}

main($_SERVER['argv'] ?? []);


