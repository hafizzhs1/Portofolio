<?php

// Vercel filesystem read-only kecuali /tmp, jadi salin DB ke sana
$src = __DIR__ . '/../database/database.sqlite';
$dst = '/tmp/database.sqlite';

if (!file_exists($dst) && file_exists($src)) {
    copy($src, $dst);
}

putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=' . $dst);
$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = $dst;
$_SERVER['DB_CONNECTION'] = 'sqlite';
$_SERVER['DB_DATABASE'] = $dst;

// Laravel juga butuh folder storage yang writable
foreach (['/tmp/storage/framework/views', '/tmp/storage/framework/cache', '/tmp/storage/framework/sessions', '/tmp/storage/logs'] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

require __DIR__ . '/../public/index.php';