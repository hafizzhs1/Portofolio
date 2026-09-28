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

// Paksa HTTPS supaya URL aset tidak diblokir (mixed content)
$_SERVER['HTTPS'] = 'on';
$_SERVER['SERVER_PORT'] = 443;
$host = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');

$env = [
    'APP_URL'            => $host,
    'ASSET_URL'          => $host,
    'DB_CONNECTION'      => 'sqlite',
    'DB_DATABASE'        => $dst,
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
    'CACHE_STORE'        => 'array',
    'CACHE_DRIVER'       => 'array',
    'SESSION_DRIVER'     => 'cookie',
    'LOG_CHANNEL'        => 'stderr',
    'APP_STORAGE'        => '/tmp/storage',
    'APP_SERVICES_CACHE' => '/tmp/bootstrap/cache/services.php',
    'APP_PACKAGES_CACHE' => '/tmp/bootstrap/cache/packages.php',
    'APP_CONFIG_CACHE'   => '/tmp/bootstrap/cache/config.php',
    'APP_ROUTES_CACHE'   => '/tmp/bootstrap/cache/routes.php',
    'APP_EVENTS_CACHE'   => '/tmp/bootstrap/cache/events.php',
];
foreach ($env as $k => $v) {
    putenv("$k=$v");
    $_ENV[$k] = $v;
    $_SERVER[$k] = $v;
}

require __DIR__ . '/../public/index.php';