<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecipeRepositoryInterface;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Collection;

class RecipeRepository extends BaseRepository implements RecipeRepositoryInterface
{
    public function __construct(Recipe $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'code', 'name', 'mixt', 'strength', 'mobil', 'frost', 'water', 'marka', 'condition', 'date', 'classRecipe', 'recipeParam', 'comment')->get();
    }

    public function search(array $criteria): Collection
    {
        $query = $this->model->query();

        if (isset($criteria['id'])) {
            $query->where('id', $criteria['id']);
        }

        if (isset($criteria['code'])) {
            $query->where('code', $criteria['code']);
        }

        return $query->get();
    }
}
