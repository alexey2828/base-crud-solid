<?php
namespace App\Repositories;

use App\Contracts\Repositories\PlantRepositoryInterface;
use App\Models\Plant;
use Illuminate\Database\Eloquent\Collection;

class PlantRepository extends BaseRepository implements PlantRepositoryInterface
{
    protected array $filterable = ['id', 'codePlant'];

    public function __construct(Plant $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'codePlant', 'name', 'comment')->get();
    }
}
