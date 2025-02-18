<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Increase max execution time (Optional)
ini_set('max_execution_time', 120); // 120 seconds

// Check If The Application Is Under Maintenance
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register The Auto Loader
require __DIR__.'/../vendor/autoload.php';

// Run The Application
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

// Handle Request and Response
try {
    $response = $kernel->handle($request = Request::capture());
    $response->send();
} catch (Exception $e) {
    // Log exception for debugging
    Log::error('Unhandled exception: ' . $e->getMessage());

    // Optionally, return a 500 response or a custom error page
    return response()->view('errors.500', [], 500);
}

// Terminate the request after sending the response
$kernel->terminate($request, $response);
