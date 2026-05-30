<?php
namespace App\Repositories;

use App\Contracts\Repositories\ReportweightmanualRepositoryInterface;
use App\Models\Reportweightmanual;
use Illuminate\Database\Eloquent\Collection;

class ReportweightmanualRepository extends BaseRepository implements ReportweightmanualRepositoryInterface
{
    public function __construct(Reportweightmanual $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'loopNumber', 'code', 'dispenser', 'weight')->get();
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
