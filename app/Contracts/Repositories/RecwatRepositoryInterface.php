<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface RecwatRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
