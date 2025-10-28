<?php
namespace App\Repositories;

use App\Interfaces\Repositories\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function all(array $columns = ['*'])
{
    return Product::all($columns);
}
    public function find($id) { return Product::findOrFail($id); }
    public function create(array $data) { return Product::create($data); }
    public function update($id, array $data) { $p = $this->find($id); $p->update($data); return $p; }
    public function delete($id) { $p = $this->find($id); return $p->delete(); }
}
