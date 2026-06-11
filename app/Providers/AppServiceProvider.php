<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Paksa Laravel 11 menggunakan folder /tmp saat berjalan di Vercel
        if (config('app.env') === 'production') {
            $this->app->useStoragePath('/tmp/storage');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Mengatur jalur kompilasi blade secara dinamis di serverless
        if (config('app.env') === 'production') {
            config(['view.compiled' => '/tmp/storage/framework/views']);
        }
    }
}
