<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\ReccommentRepositoryInterface;

class ReccommentController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(ReccommentRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
