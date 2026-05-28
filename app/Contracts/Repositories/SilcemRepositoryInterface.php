<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface SilcemRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
