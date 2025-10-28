<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer autoload
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the application
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

/** @var Kernel $kernel */
$kernel = $app->make(Kernel::class);

// Capture the HTTP request
$request = Request::capture();

// Handle the request through the kernel
$response = $kernel->handle($request);

// Send the response
$response->send();

// Terminate the kernel (finish request lifecycle)
$kernel->terminate($request, $response);
