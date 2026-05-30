<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecipeRepositoryInterface;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Collection;

class RecipeRepository extends BaseRepository implements RecipeRepositoryInterface
{
    protected array $filterable = ['id', 'code'];

    public function __construct(Recipe $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'code', 'name', 'mixt', 'strength', 'mobil', 'frost', 'water', 'marka', 'condition', 'date', 'classRecipe', 'recipeParam', 'comment')->get();
    }
}
