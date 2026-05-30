<?php
namespace App\Repositories;

use App\Contracts\Repositories\RecwatRepositoryInterface;
use App\Models\Recwat;
use Illuminate\Database\Eloquent\Collection;

class RecwatRepository extends BaseRepository implements RecwatRepositoryInterface
{
    protected array $filterable = ['id', 'code'];

    public function __construct(Recwat $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code')->get();
    }
}
