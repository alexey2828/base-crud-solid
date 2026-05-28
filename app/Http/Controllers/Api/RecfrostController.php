<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\RecfrostRepositoryInterface;

class RecfrostController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(RecfrostRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
