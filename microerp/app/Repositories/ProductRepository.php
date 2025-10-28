<?php

namespace App\Repositories;

use App\Models\Product;
use App\Interfaces\Repositories\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function _construct(Product $model)
    {
        parent::__construct($model);
    }

     // Exemplo:
    // public function findBySku(string $sku)
    // {
    //     return $this->model->where('sku', $sku)->first();
    // }
}