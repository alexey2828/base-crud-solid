<?php

namespace App\Repositories;

use App\Contracts\Repositories\TtnRepositoryInterface;
use App\Models\Ttn;

class TtnRepository extends BaseRepository implements TtnRepositoryInterface
{
    public function __construct(Ttn $model)
    {
        parent::__construct($model);
    }
}
