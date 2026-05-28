<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecstrengthRepositoryInterface;
use App\Models\Recstrength;
use Illuminate\Database\Eloquent\Collection;

class RecstrengthRepository extends BaseRepository implements RecstrengthRepositoryInterface
{
    public function __construct(Recstrength $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code')->get();
    }
}
