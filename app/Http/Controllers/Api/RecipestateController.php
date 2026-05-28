<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\RecipestateRepositoryInterface;

class RecipestateController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(RecipestateRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
