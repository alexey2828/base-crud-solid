<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ReportweightmanualRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;

    /**
     * Search Reportweightmanual by multiple criteria
     *
     * @param  array  $criteria  Search criteria (id, code)
     */
    public function search(array $criteria): Collection;
}
