<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface BsuRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;

    public function getWorkingBsu(): Collection;
}
