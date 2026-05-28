<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface RecfrostRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
