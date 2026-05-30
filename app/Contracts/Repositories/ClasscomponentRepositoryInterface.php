<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ClasscomponentRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;

    /**
     * Search Classcomponent by multiple criteria
     *
     * @param  array  $criteria  Search criteria (id, code)
     */
    public function search(array $criteria): Collection;
}
