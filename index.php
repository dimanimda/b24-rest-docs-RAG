<?php
declare(strict_types=1);

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
    // try Parsedown
    $html = '';
    if (class_exists('Parsedown')) {
        $p = new Parsedown();
        if (method_exists($p, 'setSafeMode')) { $p->setSafeMode(true); }
        $html = $p->text($md);
    } else {
        // very simple fallback: wrap code fences and paragraphs
        $html = nl2br(h($md));
        $html = preg_replace('/```([\s\S]*?)```/m', '<pre><code>$1</code></pre>', (string)$html);
    }
    return $html;
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
        $contentHtml .= renderMarkdown($file);
        $contentHtml .= '<p><a href="'.$webDir.'/">← Back</a></p>';
    }
} else {
    // List view
    $pageTitle = $pageTitle;
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
<html>
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
