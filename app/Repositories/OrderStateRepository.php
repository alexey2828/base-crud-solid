<?php
namespace App\Repositories;

use App\Contracts\Repositories\OrderStateRepositoryInterface;
use App\Models\OrderState;
use Illuminate\Database\Eloquent\Collection;
class OrderStateRepository extends BaseRepository implements OrderStateRepositoryInterface
{
    public function __construct(OrderState $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'date', 'state', 'idOrder')->get();
    }
}