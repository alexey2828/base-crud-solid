<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface DriverRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
