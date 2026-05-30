<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecmobilityRepositoryInterface;
use App\Models\Recmobility;
use Illuminate\Database\Eloquent\Collection;

class RecmobilityRepository extends BaseRepository implements RecmobilityRepositoryInterface
{
    protected array $filterable = ['id', 'code'];

    public function __construct(Recmobility $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code')->get();
    }
}
