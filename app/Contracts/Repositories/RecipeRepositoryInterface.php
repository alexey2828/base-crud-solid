<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface RecipeRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
