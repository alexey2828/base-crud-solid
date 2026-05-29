<?php

namespace App\Contracts\Services;

use Illuminate\Database\Eloquent\Collection;

interface SilcemSearchServiceInterface
{
    /**
     * Search Silcem by multiple criteria
     *
     * @param  array  $criteria  Search criteria (id, codeBSU)
     */
    public function search(array $criteria): Collection;
}
