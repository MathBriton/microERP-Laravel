<?php

namespace App\Services;

use App\Interfaces\Repositories\InvoiceRepositoryInterface;

class InvoiceService
{
    protected $invoiceRepo;

    public function __construct(InvoiceRepositoryInterface $invoiceRepo)
    {
        $this->invoiceRepo = $invoiceRepo;
    }

    public function getAll()
    {
        return $this->invoiceRepo->all();
    }

    public function getById($id)
    {
        return $this->invoiceRepo->find($id);
    }

    public function create(array $data)
    {
        return $this->invoiceRepo->create($data);
    }

    public function update($id, array $data)
    {
        return $this->invoiceRepo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->invoiceRepo->delete($id);
    }
}
