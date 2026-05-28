<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ClasscomponentRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
