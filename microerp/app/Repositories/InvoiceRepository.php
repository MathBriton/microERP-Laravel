<?php

namespace App\Repositories;

use App\Interfaces\Repositories\InvoiceRepositoryInterface;
use App\Models\Invoice;

class InvoiceRepository implements InvoiceRepositoryInterface
{
   public function all(array $columns = ['*'])
{
    return Invoice::all($columns);
}

    public function find($id)
    {
        return Invoice::findOrFail($id);
    }

    public function create(array $data)
    {
        return Invoice::create($data);
    }

    public function update($id, array $data)
    {
        $invoice = $this->find($id);
        $invoice->update($data);
        return $invoice;
    }

    public function delete($id)
    {
        $invoice = $this->find($id);
        return $invoice->delete();
    }

    
}
