<?php
namespace App\Repositories;

use App\Contracts\Repositories\CustomerRepositoryInterface;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    public function __construct(Customer $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'address', 'comment')->get();
    }
}