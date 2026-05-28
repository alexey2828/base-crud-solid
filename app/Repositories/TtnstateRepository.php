<?php

namespace App\Repositories;

use App\Contracts\Repositories\TtnstateRepositoryInterface;
use App\Models\Ttnstate;

class TtnstateRepository extends BaseRepository implements TtnstateRepositoryInterface
{
    public function __construct(Ttnstate $model)
    {
        parent::__construct($model);
    }
}
