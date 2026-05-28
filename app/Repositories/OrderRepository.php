<?php

namespace App\Repositories;

use App\Contracts\Repositories\OrderRepositoryInterface;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
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

    public function getByState(string $state): Collection
    {
        return $this->model->where('state', $state)->get();
    }

    public function getByDateRange(string $startDate, string $endDate): Collection
    {
        return $this->model->whereBetween('dateCreate', [$startDate, $endDate])->get();
    }

    public function getActiveOrdersCount(): int
    {
        return $this->model->where('state', 'active')->count();
    }

    public function getRecentOrders(int $limit): Collection
    {
        return $this->model->orderByDesc('dateCreate')->limit($limit)->get();
    }
}
