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
}
