<?php
namespace App\Repositories;

use App\Interfaces\Repositories\InvoiceItemRepositoryInterface;
use App\Models\InvoiceItem;

class InvoiceItemRepository implements InvoiceItemRepositoryInterface
{
 public function all(array $columns = ['*'])
{
    return InvoiceItem::all($columns);
}
    public function find($id) { return InvoiceItem::findOrFail($id); }
    public function create(array $data) { return InvoiceItem::create($data); }
    public function update($id, array $data) { $i = $this->find($id); $i->update($data); return $i; }
    public function delete($id) { $i = $this->find($id); return $i->delete(); }
}
