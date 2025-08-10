<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

$docsDir = __DIR__ . '/b24-rest-docs-RAG';
$indexFile = $docsDir . '/rest-index.json';
if (!is_file($indexFile)) {
    http_response_code(500);
    echo "rest-index.json not found";
    exit;
}

$idx = json_decode(file_get_contents($indexFile), true);
$methods = $idx['methods'] ?? [];
$methodParam = isset($_GET['m']) ? trim((string)$_GET['m']) : '';
$methodToPath = [];
foreach ($methods as $m) {
    $methodToPath[$m['method']] = $docsDir . '/' . str_replace(['\\'], '/', $m['path']);
}

function renderMarkdown(string $file): string
{
    $md = @file_get_contents($file);
    if ($md === false) return "<p>File not found</p>";
    $p = new Parsedown();
    $p->setSafeMode(true);
    return $p->text($md);
}

function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$body = '';
if ($methodParam !== '' && isset($methodToPath[$methodParam])) {
    $file = $methodToPath[$methodParam];
    if (!str_starts_with(realpath($file) ?: '', realpath($docsDir) ?: '')) {
        http_response_code(400);
        exit('Bad path');
    }
    $body .= "<h1>" . h($methodParam) . "</h1>";
    $body .= renderMarkdown($file);
    $body .= "<p><a href=\"/\">← К списку</a></p>";
} else {
    // Главная: список методов по scope
    $byScope = [];
    foreach ($methods as $m) {
        $byScope[$m['scope']][] = $m;
    }
    ksort($byScope);
    $body .= "<h1>Bitrix24 REST (RAG)</h1>";
    foreach ($byScope as $scope => $list) {
        $body .= "<h2>" . h($scope) . "</h2><ul>";
        foreach ($list as $m) {
            $q = rawurlencode($m['method']);
            $flags = [];
            if (!empty($m['deprecated'])) $flags[] = 'deprecated';
            if (!empty($m['pagination'])) $flags[] = $m['pagination'];
            if (!empty($m['has_example'])) $flags[] = 'example';
            $label = $m['method'] . (count($flags) ? ' [' . implode(', ', $flags) . ']' : '');
            $body .= "<li><a href=\"?m={$q}\">" . h($label) . "</a></li>";
        }
        $body .= "</ul>";
    }
}

echo "<!doctype html><html><head><meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><title>Bitrix24 REST (RAG)</title>
<style>
body{font-family:system-ui,Segoe UI,Roboto,Arial,sans-serif;max-width:1100px;margin:24px auto;padding:0 16px;line-height:1.5;}
code,pre{background:#f6f8fa;}
pre{padding:12px;overflow:auto;}
h1,h2{margin-top:1.2em;}
ul{margin:0.5em 0 1.2em 1.2em;}
a{text-decoration:none;color:#0366d6;}
a:hover{text-decoration:underline;}
</style></head><body>{$body}</body></html>";
