<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Repositories\{CustomerRepositoryInterface,
     ProductRepositoryInterface,
     InvoiceRepositoryInterface
};
use App\Models\Product;
use App\Repositories\{CustomerRepository,
ProductRepository,
InvoiceRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(InvoiceRepositoryInterface::class, InvoiceRepository::class);  
    }

    public function boot(): void
    {
        //
    }
}