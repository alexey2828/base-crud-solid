<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface WeightmanualRepositoryInterface extends RepositoryInterface
{
    /**
     * Search Weightmanual by multiple criteria
     *
     * @param  array  $criteria  Search criteria (id, code)
     */
    public function search(array $criteria): Collection;
}
