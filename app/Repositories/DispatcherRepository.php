<?php
namespace App\Repositories;

use App\Contracts\Repositories\DispatcherRepositoryInterface;
use App\Models\Dispatcher;
use Illuminate\Database\Eloquent\Collection;

class DispatcherRepository extends BaseRepository implements DispatcherRepositoryInterface
{
    public function __construct(Dispatcher $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code')->get();
    }
}