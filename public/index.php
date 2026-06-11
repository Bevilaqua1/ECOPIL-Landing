<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Suite Autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_with_globals(__DIR__.'/../bootstrap/app.php'))
    ->handle(Request::capture())
    ->send();

/**
 * Require a file with a clean global scope.
 */
function require_with_globals(string $path)
{
    return require $path;
}
