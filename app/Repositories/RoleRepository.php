<?php
namespace App\Repositories;

use App\Contracts\Repositories\RoleRepositoryInterface;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    public function __construct(Role $model)
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
        
        if (isset($criteria['name'])) {
            $query->where('name', $criteria['name']);
        }

        return $query->get();
    }
}
