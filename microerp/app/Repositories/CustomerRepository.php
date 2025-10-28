<?php
namespace App\Repositories;

use App\Interfaces\Repositories\CustomerRepositoryInterface;
use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
   public function all(array $columns = ['*'])
{
    return Customer::all($columns);
}
    public function find($id) { return Customer::findOrFail($id); }
    public function create(array $data) { return Customer::create($data); }
    public function update($id, array $data) { $c = $this->find($id); $c->update($data); return $c; }
    public function delete($id) { $c = $this->find($id); return $c->delete(); }
    public function findByEmail(string $email) { return Customer::where('email', $email)->first(); }
}
