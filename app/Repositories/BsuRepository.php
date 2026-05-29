<?php

namespace App\Repositories;

use App\Contracts\Repositories\BsuRepositoryInterface;
use App\Models\Bsu;
use Illuminate\Database\Eloquent\Collection;

class BsuRepository extends BaseRepository implements BsuRepositoryInterface
{
    public function __construct(Bsu $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'codePlant', 'code', 'name', 'vMixer', 'isWork')->get();
    }

    public function getWorkingBsu(): Collection
    {
        return $this->model->where('isWork', true)->get();
    }

    public function search(array $criteria): Collection
    {
        $query = $this->model->query();

        if (isset($criteria['id'])) {
            $query->where('id', $criteria['id']);
        }

        if (isset($criteria['codePlant'])) {
            $query->where('codePlant', $criteria['codePlant']);
        }

        if (isset($criteria['code'])) {
            $query->where('code', $criteria['code']);
        }

        if (isset($criteria['name'])) {
            $query->where('name', 'LIKE', '%'.$criteria['name'].'%');
        }

        if (isset($criteria['vMixer'])) {
            $query->where('vMixer', $criteria['vMixer']);
        }

        if (isset($criteria['isWork'])) {
            $query->where('isWork', (bool) $criteria['isWork']);
        }

        return $query->get();
    }
}
