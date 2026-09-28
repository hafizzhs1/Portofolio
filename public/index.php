<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// Vercel: storage harus di /tmp karena filesystem read-only
if (getenv('APP_STORAGE')) {
    $app->useStoragePath(getenv('APP_STORAGE'));
}

$app->handleRequest(Request::capture());