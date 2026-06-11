<?php

// 1. Buat folder penyimpanan sementara secara aman di memori /tmp Vercel
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

// 2. Set environment variabel khusus di tingkat PHP runtime untuk memaksa path storage
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

// 3. Muat file bootstrap asli Laravel 11
$app = require __DIR__ . '/../bootstrap/app.php';

// 4. Paksa aplikasi menggunakan folder storage /tmp yang bisa ditulis (Writable)
$app->useStoragePath('/tmp/storage');

// 5. Jalankan HTTP Kernel Laravel untuk memproses request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
