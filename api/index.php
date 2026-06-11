<?php

// Membuat folder storage terstruktur di dalam folder /tmp Vercel
$storageFolders = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/bootstrap/cache'
];

foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0755, true);
    }
}

// Meneruskan request ke index.php bawaan Laravel
require __DIR__ . '/../public/index.php';
