<?php

// 1. Muat sistem Composer Autoload agar semua kelas Laravel (Illuminate) bisa dibaca
require __DIR__ . '/../vendor/autoload.php';

// 2. Buat folder penyimpanan sementara secara aman di memori /tmp Vercel
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

// 3. Set environment jalur kompilasi blade ke folder /tmp yang bisa ditulis (Writable)
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

// 4. Panggil inisialisasi aplikasi asli Laravel 11
$app = require __DIR__ . '/../bootstrap/app.php';

// 5. Paksa Laravel menggunakan path storage di folder /tmp Vercel
$app->useStoragePath('/tmp/storage');

// 6. Jalankan HTTP Kernel Laravel untuk memproses kunjungan user
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
