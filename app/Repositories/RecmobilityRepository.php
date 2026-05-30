<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecmobilityRepositoryInterface;
use App\Models\Recmobility;
use Illuminate\Database\Eloquent\Collection;

class RecmobilityRepository extends BaseRepository implements RecmobilityRepositoryInterface
{
    public function __construct(Recmobility $model)
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
