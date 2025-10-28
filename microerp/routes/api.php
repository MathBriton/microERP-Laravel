<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aqui ficam todas as rotas da API do MicroERP.
| Usando RESTful Controllers e rotas individuais para Customer,
| e API Resources para Product e Invoice.
|
*/

// Customers
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

// Products
Route::apiResource('products', ProductController::class);

// Invoices
Route::apiResource('invoices', InvoiceController::class);
