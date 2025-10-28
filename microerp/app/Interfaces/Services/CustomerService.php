<?php

namespace App\Services;

use App\Interfaces\Repositories\CustomerRepositoryInterface;

class CustomerService
{
    protected $customerRepo;

    public function __construct(CustomerRepositoryInterface $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }

    public function getAll()
    {
        return $this->customerRepo->all();
    }

    public function getById($id)
    {
        return $this->customerRepo->find($id);
    }

    public function create(array $data)
    {
        return $this->customerRepo->create($data);
    }

    public function update($id, array $data)
    {
        return $this->customerRepo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->customerRepo->delete($id);
    }
}
