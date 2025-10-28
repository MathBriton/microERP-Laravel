<?php

namespace App\Repositories;

use App\Models\Invoice;
use App\Interfaces\Repositories\InvoiceRepositoryInterface;

class InvoiceRepository extends BaseRepository implements InvoiceRepositoryInterface
{
    public function __construct(Invoice $model)
    {
        parent::__construct($model);
    }

     // Exemplo:
    // public function findBySku(string $sku)
    // {
    //     return $this->model->where('sku', $sku)->first();
    // }
}