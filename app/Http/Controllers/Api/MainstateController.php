<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\MainstateRepositoryInterface;

class MainstateController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(MainstateRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
