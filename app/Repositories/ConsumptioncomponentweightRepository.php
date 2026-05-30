<?php
namespace App\Repositories;

use App\Contracts\Repositories\ConsumptioncomponentweightRepositoryInterface;
use App\Models\Consumptioncomponentweight;
use Illuminate\Database\Eloquent\Collection;

class ConsumptioncomponentweightRepository extends BaseRepository implements ConsumptioncomponentweightRepositoryInterface
{
    protected array $filterable = ['id', 'code'];

    public function __construct(Consumptioncomponentweight $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'date', 'code', 'weight', 'silCemCode')->get();
    }
}
