<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Global declaration to ensure it's never undefined
$storagePath = '/tmp/storage';

// 1. Secure temporary storage folders in Vercel serverless memory
if (getenv('APP_ENV') === 'production') {
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

// 2. Check if the application is in maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// 3. Load Composer Autoload system
require __DIR__.'/../vendor/autoload.php';

// 4. Initialize Laravel 11 application
$app = require __DIR__.'/../bootstrap/app.php';

// 5. Safely bind the storage path using the global variable
if (getenv('APP_ENV') === 'production') {
    $app->useStoragePath($storagePath);
}

// 6. Run Laravel HTTP Kernel to handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
