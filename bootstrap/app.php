<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->booting(function ($app) {
        // PENGATURAN WAJIB VERCEL: Paksa alokasi path sebelum Service Provider dimuat
        if (getenv('APP_ENV') === 'production') {
            $app->useStoragePath('/tmp/storage');
            config(['view.compiled' => '/tmp/storage/framework/views']);
        }
    })
    ->create();
