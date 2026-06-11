<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Mengatur folder storage sementara khusus untuk Vercel Serverless
if (env('APP_ENV') === 'production') {
    $app_storage_path = '/tmp/storage';
    $_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
}

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Memercayai proxy agar URL SSL (https) Vercel terbaca dengan benar
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->booting(function ($app) {
        // Memaksa Laravel menggunakan path storage di folder /tmp Vercel
        if (env('APP_ENV') === 'production') {
            $app->useStoragePath('/tmp/storage');
        }
    })
    ->create();
