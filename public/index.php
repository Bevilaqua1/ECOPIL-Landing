<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Cek mode maintenance jika ada
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// 2. Muat sistem Composer Autoload
require __DIR__.'/../vendor/autoload.php';

// 3. Jalankan inisialisasi bootstrap Laravel 11
$app = require_with_globals(__DIR__.'/../bootstrap/app.php');

// 4. Proses request pengunjung
$response = $app->handle(Request::capture());

$response->send();

$app->terminate(Request::capture(), $response);

/**
 * Helper function bawaan Laravel 11
 */
function require_with_globals(string $path) {
    return require $path;
}
