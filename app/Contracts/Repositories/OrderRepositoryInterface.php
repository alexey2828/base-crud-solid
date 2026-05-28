<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface OrderRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;

    public function getByState(string $state): Collection;

    public function getByDateRange(string $startDate, string $endDate): Collection;

    public function getActiveOrdersCount(): int;

    public function getRecentOrders(int $limit): Collection;
}
