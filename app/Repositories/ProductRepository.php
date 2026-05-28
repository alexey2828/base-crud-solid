<?php
namespace App\Repositories;

use App\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'dateStart', 'timeEnd', 'vProduct', 'loopNumber', 'vLoop', 'driver', 'car', 'classRecipe', 'nameRecipe', 'recipe', 'idTtn', 'timeStart', 'num_loop', 'idPlant', 'indProduct')->get();
    }
}
