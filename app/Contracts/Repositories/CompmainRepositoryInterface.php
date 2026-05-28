<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface CompmainRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
