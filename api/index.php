<?php

// Vercel: filesystem read-only kecuali /tmp
$src = __DIR__ . '/../database/database.sqlite';
$dst = '/tmp/database.sqlite';

if (!file_exists($dst) && file_exists($src)) {
    copy($src, $dst);
}

// Folder writable di /tmp
foreach ([
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Env override (dipaksa lewat putenv + $_ENV + $_SERVER)
$env = [
    'DB_CONNECTION'      => 'sqlite',
    'DB_DATABASE'        => $dst,
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
    'CACHE_STORE'        => 'array',
    'CACHE_DRIVER'       => 'array',
    'SESSION_DRIVER'     => 'cookie',
    'LOG_CHANNEL'        => 'stderr',
    'APP_STORAGE'        => '/tmp/storage',
];
foreach ($env as $k => $v) {
    putenv("$k=$v");
    $_ENV[$k] = $v;
    $_SERVER[$k] = $v;
}

ini_set('display_errors', '1');
error_reporting(E_ALL);

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain');
    echo get_class($e) . ": " . $e->getMessage() . "\n";
    echo $e->getFile() . ':' . $e->getLine() . "\n\n";
    echo $e->getTraceAsString();
}