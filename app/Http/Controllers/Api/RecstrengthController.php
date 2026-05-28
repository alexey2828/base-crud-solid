<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\RecstrengthRepositoryInterface;

class RecstrengthController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(RecstrengthRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
