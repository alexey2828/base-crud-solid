<?php

namespace App\Repositories;

use App\Contracts\Repositories\WeightmanualRepositoryInterface;
use App\Models\Weightmanual;

class WeightmanualRepository extends BaseRepository implements WeightmanualRepositoryInterface
{
    public function __construct(Weightmanual $model)
    {
        parent::__construct($model);
    }

    public function search(array $criteria)
    {
        $query = $this->model->query();

        if (isset($criteria['id'])) {
            $query->where('id', $criteria['id']);
        }

        if (isset($criteria['code'])) {
            $query->where('code', $criteria['code']);
        }

        return $query->get();
    }
}
