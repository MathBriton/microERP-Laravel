<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;

Route::apiResource('customers', CustomerController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('invoices', InvoiceController::class);