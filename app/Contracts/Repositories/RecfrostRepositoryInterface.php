<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface RecfrostRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;

    /**
     * Search Recfrost by multiple criteria
     *
     * @param  array  $criteria  Search criteria (id, code)
     */
    public function search(array $criteria): Collection;
}
