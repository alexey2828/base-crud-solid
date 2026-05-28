<?php
namespace App\Repositories;

use App\Contracts\Repositories\DriverRepositoryInterface;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Collection;
class DriverRepository extends BaseRepository implements DriverRepositoryInterface
{
    public function __construct(Driver $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'codeRFID', 'comment')->get();
    }
}