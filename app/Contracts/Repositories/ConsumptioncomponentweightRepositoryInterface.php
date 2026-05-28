<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ConsumptioncomponentweightRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
