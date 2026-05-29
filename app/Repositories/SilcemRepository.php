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

    public function search(array $criteria): Collection
    {
        $query = $this->model->query();

        if (isset($criteria['id'])) {
            $query->where('id', $criteria['id']);
        }

        if (isset($criteria['codeBSU'])) {
            $query->where('codeBSU', $criteria['codeBSU']);
        }

        return $query->get();
    }
}
