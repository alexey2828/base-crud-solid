<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface MainstateRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
