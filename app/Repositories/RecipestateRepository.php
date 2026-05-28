<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecipestateRepositoryInterface;
use App\Models\Recipestate;
use Illuminate\Database\Eloquent\Collection;

class RecipestateRepository extends BaseRepository implements RecipestateRepositoryInterface
{
    public function __construct(Recipestate $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'state', 'date', 'codeBsu')->get();
    }
}
