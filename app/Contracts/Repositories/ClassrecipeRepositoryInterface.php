<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ClassrecipeRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
