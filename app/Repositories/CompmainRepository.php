<?php
namespace App\Repositories;

use App\Contracts\Repositories\CompmainRepositoryInterface;
use App\Models\Compmain;
use Illuminate\Database\Eloquent\Collection;

class CompmainRepository extends BaseRepository implements CompmainRepositoryInterface
{
    protected array $filterable = ['id', 'code'];

    public function __construct(Compmain $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'code')->get();
    }
}
