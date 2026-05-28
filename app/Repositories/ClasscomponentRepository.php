<?php
namespace App\Repositories;

use App\Contracts\Repositories\ClasscomponentRepositoryInterface;
use App\Models\Classcomponent;
use Illuminate\Database\Eloquent\Collection;

class ClasscomponentRepository extends BaseRepository implements ClasscomponentRepositoryInterface
{
    public function __construct(Classcomponent $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code', 'shortName')->get();
    }
}
