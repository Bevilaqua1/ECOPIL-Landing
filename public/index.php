<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Daftarkan folder penyimpanan sementara secara aman
if (getenv('APP_ENV') === 'production') {
    $storagePath = '/tmp/storage';
    $folders = [
        $storagePath . '/framework/views',
        $storagePath . '/framework/cache',
        $storagePath . '/framework/sessions',
        $storagePath . '/bootstrap/cache'
    ];
    foreach ($folders as $folder) {
        if (!is_dir($folder)) {
            @mkdir($folder, 0755, true);
        }
    }
    putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
}

// 2. Muat sistem Composer Autoload
require __DIR__.'/../vendor/autoload.php';

// 3. Jalankan inisialisasi aplikasi asli Laravel 11
$app = require __DIR__.'/../bootstrap/app.php';

// 4. Bind path storage ke /tmp
if (getenv('APP_ENV') === 'production') {
    $app->useStoragePath($storagePath);
}

// 5. Jalankan HTTP Kernel Laravel untuk memproses kunjungan user
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
