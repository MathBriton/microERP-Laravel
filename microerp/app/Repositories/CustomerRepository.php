<?php 

namespace App\Repositories;

use App\Models\Customer;
use App\Interfaces\Repositories\CustomerRepositoryInterface;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    public function __construct(Customer $model)
    {
        parent::__construct($model);
    }


    // Exemplo de método específico:
    // public function findByEmail(string $email)
    // {
    //     return $this->model->where('email', $email)->first();
    // }
}