<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\PlantRepositoryInterface;

class PlantController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(PlantRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
