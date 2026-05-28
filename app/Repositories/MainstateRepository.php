<?php
namespace App\Repositories;

use App\Contracts\Repositories\MainstateRepositoryInterface;
use App\Models\Mainstate;
use Illuminate\Database\Eloquent\Collection;

class MainstateRepository extends BaseRepository implements MainstateRepositoryInterface
{
    public function __construct(Mainstate $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code', 'options', 'entityName', 'isPause')->get();
    }
}
