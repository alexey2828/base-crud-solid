<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ReportweightmanualRepositoryInterface extends RepositoryInterface
{
    public function getAllWithSpecificFields(): Collection;
}
