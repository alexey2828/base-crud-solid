<?php
namespace App\Repositories;

use App\Contracts\Repositories\SilcemRepositoryInterface;
use App\Models\Silcem;
use Illuminate\Database\Eloquent\Collection;

class SilcemRepository extends BaseRepository implements SilcemRepositoryInterface
{
    public function __construct(Silcem $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'codeBSU', 'code', 'batcher', 'capacity')->get();
    }
}
