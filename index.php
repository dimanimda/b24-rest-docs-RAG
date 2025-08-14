<?php
declare(strict_types=1);

// Composer autoload (for Parsedown/ParsedownExtra)
@include __DIR__ . '/vendor/autoload.php';

// Base web path of this app (folder under site root). Auto-detect by default.
$webDir = rtrim(str_replace('\\','/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($webDir === '' || $webDir === '.') { $webDir = '/'; }

$baseDir = __DIR__;
$docsDir = $baseDir;
$indexFile = $docsDir . '/rest-index.json';
if (!is_file($indexFile)) {
    http_response_code(500);
    echo 'rest-index.json not found';
    exit;
}

$index = json_decode((string)file_get_contents($indexFile), true) ?: [];
$methods = $index['methods'] ?? [];

// Router: /<webDir>/method/<method>
if (isset($_SERVER['REQUEST_URI'])) {
    $uri = strtok($_SERVER['REQUEST_URI'], '?');
    $pattern = '~^' . preg_quote($webDir === '/' ? '' : $webDir, '~') . '/method/(.+)$~';
    if (preg_match($pattern, $uri, $m)) {
        $_GET['m'] = $m[1];
    }
}

$methodParam = isset($_GET['m']) ? trim((string)$_GET['m']) : '';
$methodToPath = [];
foreach ($methods as $m) {
    $rel = str_replace(['\\','/'], DIRECTORY_SEPARATOR, (string)$m['path']);
    $methodToPath[$m['method']] = $docsDir . DIRECTORY_SEPARATOR . $rel;
}

function h(string $s): string { return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

function renderMarkdown(string $file): string {
    $md = @file_get_contents($file);
    if ($md === false) return '<p>File not found</p>';
    // init Parsedown if available
    $pd = null;
    $parsedownClass = '\\Parsedown';
    if (class_exists($parsedownClass)) {
        $pd = new $parsedownClass();
        if (method_exists($pd, 'setSafeMode')) { $pd->setSafeMode(true); }
    }
    // preprocess: strip templating/frontmatter; tables converted to GFM if any leftovers
    $md = preprocessBitrixMarkdown($md);
    // Convert any leftover Bitrix tables to GFM to be safe
    $md = preg_replace_callback('/^#\|[\t ]*\R([\s\S]*?)^\|#[\t ]*$/m', function ($m) {
        $block = $m[1];
        $lines = preg_split('/\R/', $block);
        $rows = [];
        $current = null;
        foreach ($lines as $line) {
            $trim = trim($line);
            if ($trim === '') { if ($current !== null) { $current['tail'][] = ''; } continue; }
            if (str_starts_with($trim, '||')) {
                if ($current !== null) { $rows[] = $current; }
                $content = preg_replace('/^\|\|/','', $trim);
                $content = rtrim($content);
                $content = preg_replace('/\|\|$/','', $content);
                $cells = array_map('trim', preg_split('/\s*\|\s*/', $content));
                $current = ['cells' => $cells, 'tail' => []];
            } else {
                if ($current !== null) { $current['tail'][] = $line; }
            }
        }
        if ($current !== null) { $rows[] = $current; }
        if (!$rows) { return $m[0]; }
        foreach ($rows as &$r) { if (!empty($r['tail'])) { $r['cells'][count($r['cells'])-1] .= "\n".implode("\n", $r['tail']); } }
        unset($r);
        $headers = $rows[0]['cells'];
        $out = '| ' . implode(' | ', array_map('trim', $headers)) . " |\n";
        $out .= '| '.implode(' | ', array_map(fn($c)=> str_repeat('-', max(3, strlen(strip_tags($c)))), $headers))." |\n";
        for ($i=1; $i<count($rows); $i++) {
            $out .= '| '.implode(' | ', array_map('trim', $rows[$i]['cells']))." |\n";
        }
        return $out;
    }, $md);
    $md = preg_replace_callback('/((?:^[\t ]*\|\|.*$\R?){2,})/m', function ($m) {
        $block = $m[1];
        $lines = preg_split('/\R/', trim($block));
        $rows = [];
        foreach ($lines as $line) {
            $trim = trim($line);
            if ($trim === '' || !str_starts_with($trim, '||')) { continue; }
            $content = preg_replace('/^\|\|/','', $trim);
            $content = rtrim($content);
            $content = preg_replace('/\|\|$/','', $content);
            $cells = array_map('trim', preg_split('/\s*\|\s*/', $content));
            $rows[] = $cells;
        }
        if (count($rows) < 2) { return $m[0]; }
        $headers = $rows[0];
        $out = '| ' . implode(' | ', $headers) . " |\n";
        $out .= '| '.implode(' | ', array_map(fn($c)=> str_repeat('-', max(3, strlen(strip_tags($c)))), $headers))." |\n";
        for ($i=1; $i<count($rows); $i++) {
            $out .= '| '.implode(' | ', $rows[$i])." |\n";
        }
        return $out;
    }, $md);
    // render markdown
    if ($pd) {
        return $pd->text($md);
    }
    // fallback: simple formatting
    // Avoid <br> inside code fences
    $html = h($md);
    $html = preg_replace_callback('/```([a-zA-Z0-9_-]*)\n([\s\S]*?)```/', function($m){
        $lang = $m[1]; $code = $m[2];
        return '<pre><code class="lang-'.h($lang).'">'.h($code).'</code></pre>';
    }, $html);
    // Convert remaining newlines to <br> outside code blocks
    $parts = preg_split('#(<pre[\s\S]*?<\/pre>)#i', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
    $rebuilt = '';
    foreach ($parts as $chunk) {
        if ($chunk === '') continue;
        if (preg_match('#^<pre[\s\S]*<\/pre>$#i', $chunk)) {
            $rebuilt .= $chunk; // keep code blocks intact
        } else {
            $rebuilt .= preg_replace("/\n/", "<br>\n", $chunk);
        }
    }
    $html = $rebuilt;
    return $html;
}

function preprocessBitrixMarkdown(string $md): string {
    // Strip YAML frontmatter if present
    $md = preg_replace('/^---\s*[\r\n]([\s\S]*?)\r?\n---\s*[\r\n]/', '', $md, 1);
    // Remove liquid-like includes/macros
    $md = preg_replace('/\{\%[\s\S]*?\%\}/u', '', $md);
    $md = preg_replace('/\{\{[\s\S]*?\}\}/u', '', $md);
    // Note: Bitrix tables are converted to GFM in generator; no HTML table conversion here
    return $md;
}

$pageTitle = 'Bitrix24 REST (RAG)';
$contentHtml = '';

if ($methodParam !== '' && isset($methodToPath[$methodParam])) {
    $file = realpath($methodToPath[$methodParam]) ?: $methodToPath[$methodParam];
    $allowedRoot = realpath($docsDir) ?: $docsDir;
    if ($file === false || !str_starts_with($file, $allowedRoot)) {
        http_response_code(404);
        $contentHtml = '<p>Method not found</p>';
    } else {
        $pageTitle = $methodParam . ' - ' . $pageTitle;
        $parts = explode('.', $methodParam);
        $scope = array_shift($parts);
        $home = rtrim($webDir, '/'); if ($home==='') { $home = '/'; }
        $contentHtml .= '<nav><a href="'.$home.'/">Home</a> › <a href="'.$home.'/?scope='.h($scope).'">'.h($scope).'</a> › '.h($methodParam).'</nav>';
        $contentHtml .= '<h1>'.h($methodParam).'</h1>';
        // Render Markdown only
        $contentHtml .= renderMarkdown($file);
        $contentHtml .= '<p><a href="'.$webDir.'/">← Back</a></p>';
    }
} else {
    // List view
    $contentHtml .= '<h1>Bitrix24 REST (RAG)</h1>';
    $contentHtml .= '<div id="controls">'
        .'<input id="q" type="search" placeholder="Search method (e.g. crm.deal.get)" /> '
        .'<select id="scope"><option value="">All scopes</option></select> '
        .'<label><input type="checkbox" id="flag-deprecated"/> deprecated</label> '
        .'<label><input type="checkbox" id="flag-example"/> example</label> '
        .'<select id="pagination"><option value="">any pagination</option><option value="start">start</option><option value="nav_params">nav_params</option><option value="none">none</option><option value="unknown">unknown</option></select> '
        .'<button id="clear">Clear</button>'
        .'</div>';
    $contentHtml .= '<div id="list"></div>';
}

// Embed index for client-side filtering
$embeddedIndex = json_encode($index, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

?><!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?=h($pageTitle)?></title>
  <link rel="stylesheet" href="<?= rtrim($webDir,'/') ?>/assets/style.css"/>
  <script>
    window.__REST_INDEX__ = <?=$embeddedIndex?>;
    window.__WEB_DIR__ = <?= json_encode(rtrim($webDir,'/'), JSON_UNESCAPED_SLASHES) ?>;
  </script>
  <script defer src="<?= rtrim($webDir,'/') ?>/assets/app.js"></script>
</head>
<body>
<header>
  <a href="<?= rtrim($webDir,'/') ?>/" class="brand">Bitrix24 REST (RAG)</a>
  <nav class="top-nav">
    <a href="<?= rtrim($webDir,'/') ?>/rest-index.json" target="_blank">rest-index.json</a>
    <a href="<?= rtrim($webDir,'/') ?>/sitemap.xml" target="_blank">sitemap.xml</a>
  </nav>
  <hr/>
</header>

<main>
  <?=$contentHtml?>
</main>

<footer>
  <hr/>
  <p>Generated for AI agents • <?=date('Y-m-d')?></p>
</footer>

<script>
// Enhance headings with anchors and add copy buttons to code blocks
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('h2,h3').forEach(h => {
    const txt = h.textContent || '';
    const id = txt.toLowerCase().replace(/[^a-z0-9_.\-]+/g,'-');
    if (id && !h.id) { h.id = id; }
  });
  document.querySelectorAll('pre > code').forEach(code => {
    const pre = code.parentElement;
    const btn = document.createElement('button');
    btn.className = 'copy-btn'; btn.textContent = 'Copy';
    btn.addEventListener('click', () => {
      navigator.clipboard.writeText(code.textContent || '').then(()=>{ btn.textContent='Copied'; setTimeout(()=>btn.textContent='Copy',1200);});
    });
    pre.style.position = 'relative';
    btn.style.position = 'absolute'; btn.style.top='6px'; btn.style.right='6px';
    pre.appendChild(btn);
  });
});
</script>

</body>
</html>
