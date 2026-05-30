<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface RecstrengthRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;

    /**
     * Search Recstrength by multiple criteria
     *
     * @param  array  $criteria  Search criteria (id, code)
     */
    public function search(array $criteria): Collection;
}
