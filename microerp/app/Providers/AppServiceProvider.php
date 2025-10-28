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
        $this->app->bind(
            \App\Interfaces\Repositories\CustomerRepositoryInterface::class,
            \App\Repositories\CustomerRepository::class
        );

        $this->app->bind(
            \App\Interfaces\Repositories\ProductRepositoryInterface::class,
            \App\Repositories\ProductRepository::class
        );

        $this->app->bind(
            \App\Interfaces\Repositories\InvoiceRepositoryInterface::class,
            \App\Repositories\InvoiceRepository::class
        );

        $this->app->bind(
            \App\Interfaces\Repositories\InvoiceItemRepositoryInterface::class,
            \App\Repositories\InvoiceItemRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
