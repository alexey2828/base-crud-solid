<?php
namespace App\Repositories;

use App\Contracts\Repositories\ClassrecipeRepositoryInterface;
use App\Models\Classrecipe;
use Illuminate\Database\Eloquent\Collection;

class ClassrecipeRepository extends BaseRepository implements ClassrecipeRepositoryInterface
{
    protected array $filterable = ['id', 'code'];
    
    public function __construct(Classrecipe $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code', 'shortName')->get();
    }
}