<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Amankan folder penyimpanan sementara di memori serverless Vercel menggunakan getenv
if (getenv('APP_ENV') === 'production') {
    $storageFolders = [
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/cache',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/bootstrap/cache'
    ];
    foreach ($storageFolders as $folder) {
        if (!is_dir($folder)) {
            @mkdir($folder, 0755, true);
        }
    }
    
    // Menghapus file cache bootstrap yang terkunci jika ada
    if (file_exists('/tmp/storage/bootstrap/cache/services.php')) {
        @unlink('/tmp/storage/bootstrap/cache/services.php');
    }
    if (file_exists('/tmp/storage/bootstrap/cache/packages.php')) {
        @unlink('/tmp/storage/bootstrap/cache/packages.php');
    }

    // Paksa Laravel menggunakan path compile view di folder /tmp Vercel
    putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
}

// 2. Cek apakah aplikasi sedang dalam mode perbaikan (Maintenance Mode)
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// 3. Muat sistem Composer Autoload
require __DIR__.'/../vendor/autoload.php';

// 4. Jalankan inisialisasi aplikasi asli Laravel 11
$app = require __DIR__.'/../bootstrap/app.php';

// 5. Paksa aplikasi menggunakan folder storage /tmp yang bisa ditulis (Writable)
if (getenv('APP_ENV') === 'production') {
    $app->useStoragePath('/tmp/storage');
}

// 6. Jalankan HTTP Kernel Laravel untuk memproses kunjungan user
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
