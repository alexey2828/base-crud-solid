<?php

namespace App\Repositories;

use App\Contracts\Repositories\MixtureRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Mixture;

class MixtureRepository extends BaseRepository implements MixtureRepositoryInterface
{
    public function __construct(Mixture $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'fullName', 'code', 'shortName')->get();
    }
}