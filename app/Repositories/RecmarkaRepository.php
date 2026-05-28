<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecmarkaRepositoryInterface;
use App\Models\Recmarka;
use Illuminate\Database\Eloquent\Collection;

class RecmarkaRepository extends BaseRepository implements RecmarkaRepositoryInterface
{
    public function __construct(Recmarka $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code')->get();
    }
}
