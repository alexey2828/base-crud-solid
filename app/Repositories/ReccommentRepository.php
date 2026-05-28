<?php
namespace App\Repositories;

use App\Contracts\Repositories\ReccommentRepositoryInterface;
use App\Models\Reccomment;
use Illuminate\Database\Eloquent\Collection;

class ReccommentRepository extends BaseRepository implements ReccommentRepositoryInterface
{
    public function __construct(Reccomment $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name')->get();
    }
}
