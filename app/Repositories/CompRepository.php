<?php
namespace App\Repositories;

use App\Contracts\Repositories\CompRepositoryInterface;
use App\Models\Comp;
use Illuminate\Database\Eloquent\Collection;
class CompRepository extends BaseRepository implements CompRepositoryInterface
{
    public function __construct(Comp $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code', 'typeCode')->get();
    }
}