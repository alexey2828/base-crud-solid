<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface OrderStateRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
