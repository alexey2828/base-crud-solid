<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface RoleRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
    
    /**
     * Search Role by multiple criteria
     *
     * @param  array  $criteria  Search criteria (id, code, name)
     */

    public function search(array $criteria): Collection;
}
