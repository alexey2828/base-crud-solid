<?php

namespace App\Services;

use App\Contracts\Repositories\BsuRepositoryInterface;
use App\Contracts\Services\BsuSearchServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class BsuSearchService implements BsuSearchServiceInterface
{
    public function __construct(protected BsuRepositoryInterface $bsuRepository) {}

    public function search(array $criteria): Collection
    {
        return $this->bsuRepository->search($criteria);
    }
}
