<?php
namespace App\Repositories;

use App\Contracts\Repositories\CurrentcomponentweightRepositoryInterface;
use App\Models\Currentcomponentweight;
use Illuminate\Database\Eloquent\Collection;

class CurrentcomponentweightRepository extends BaseRepository implements CurrentcomponentweightRepositoryInterface
{
    protected array $filterable = ['id', 'code'];

    public function __construct(Currentcomponentweight $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'date', 'weight', 'code', 'bsuCode', 'silCemCode', 'deltaWeight', 'isIncreased')->get();
    }
}
