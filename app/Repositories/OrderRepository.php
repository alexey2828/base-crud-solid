<?php
namespace App\Repositories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
class OrderRepository extends BaseRepository
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select(
            'id', 'idCustomer', 'number', 'dispatcher', 'dateCreate', 
            'classRecipe', 'nameRecipe', 'vOrder', 'state', 'adress', 
            'dateFinish', 'dateStart', 'interval', 'fromObject', 
            'toObject', 'idPlant'
        )->get();
    }
}