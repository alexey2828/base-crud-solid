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

    public function search(array $criteria): Collection
    {
        $query = $this->model->query();

        if (isset($criteria['id'])) {
            $query->where('id', $criteria['id']);
        }

        if (isset($criteria['code'])) {
            $query->where('code', $criteria['code']);
        }

        return $query->get();
    }
}
