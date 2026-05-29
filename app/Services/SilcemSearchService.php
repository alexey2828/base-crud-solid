<?php

namespace App\Services;

use App\Contracts\Repositories\SilcemRepositoryInterface;
use App\Contracts\Services\SilcemSearchServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class SilcemSearchService implements SilcemSearchServiceInterface
{
    public function __construct(protected SilcemRepositoryInterface $silcemRepository) {}

    public function search(array $criteria): Collection
    {
        return $this->silcemRepository->search($criteria);
    }
}
