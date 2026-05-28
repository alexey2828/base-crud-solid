<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\RecmarkaRepositoryInterface;

class RecmarkaController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(RecmarkaRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
