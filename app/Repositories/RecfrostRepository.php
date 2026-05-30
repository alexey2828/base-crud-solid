<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecfrostRepositoryInterface;
use App\Models\Recfrost;
use Illuminate\Database\Eloquent\Collection;

class RecfrostRepository extends BaseRepository implements RecfrostRepositoryInterface
{
    protected array $filterable = ['id', 'code'];

    public function __construct(Recfrost $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'code', 'name')->get();
    }
}
