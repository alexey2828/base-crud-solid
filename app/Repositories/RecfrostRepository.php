<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecfrostRepositoryInterface;
use App\Models\Recfrost;
use Illuminate\Database\Eloquent\Collection;

class RecfrostRepository extends BaseRepository implements RecfrostRepositoryInterface
{
    public function __construct(Recfrost $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'code', 'name')->get();
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
