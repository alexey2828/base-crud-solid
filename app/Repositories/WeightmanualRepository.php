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
}
