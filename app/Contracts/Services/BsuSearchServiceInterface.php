<?php

namespace App\Contracts\Services;

use Illuminate\Database\Eloquent\Collection;

interface BsuSearchServiceInterface
{
    /**
     * Search BSU by multiple criteria
     *
     * @param  array  $criteria  Search criteria (id, codePlant, name, vMixer, isWork, code)
     */
    public function search(array $criteria): Collection;
}
