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

    public function search(array $filters): Collection
    {
        $query = $this->model->query();

        if (isset($filters['id']) && $filters['id'] !== null) {
            $query->where('id', $filters['id']);
        }

        if (isset($filters['idCustomer']) && $filters['idCustomer'] !== null) {
            $query->where('idCustomer', $filters['idCustomer']);
        }

        if (isset($filters['idPlant']) && $filters['idPlant'] !== null) {
            $query->where('idPlant', $filters['idPlant']);
        }

        if (isset($filters['dispatcher']) && $filters['dispatcher'] !== null) {
            $query->where('dispatcher', 'like', '%' . $filters['dispatcher'] . '%');
        }

        if (isset($filters['nameRecipe']) && $filters['nameRecipe'] !== null) {
            $query->where('nameRecipe', 'like', '%' . $filters['nameRecipe'] . '%');
        }

        if (isset($filters['dateStart']) && $filters['dateStart'] !== null) {
            $query->whereDate('dateStart', '>=', $filters['dateStart']);
        }

        if (isset($filters['dateFinish']) && $filters['dateFinish'] !== null) {
            $query->whereDate('dateFinish', '<=', $filters['dateFinish']);
        }

        return $query->get();
    }

    public function getByState(string $state): Collection
    {
        return $this->model->where('state', $state)->get();
    }

    public function getByDateRange(string $startDate, string $endDate): Collection
    {
        return $this->model
            ->whereDate('dateCreate', '>=', $startDate)
            ->whereDate('dateCreate', '<=', $endDate)
            ->get();
    }

    public function getActiveOrdersCount(): int
    {
        return $this->model
            ->where(function ($query) {
                $query->whereNull('dateFinish')
                    ->orWhereDate('dateFinish', '>=', now());
            })
            ->count();
    }

    public function getRecentOrders(int $limit): Collection
    {
        return $this->model
            ->orderByDesc('dateCreate')
            ->limit($limit)
            ->get();
    }
}