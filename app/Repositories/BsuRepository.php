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
}