<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\TtnstateRepositoryInterface;

class TtnstateController extends BaseApiController
{
    public array $validationRules = [
        'date' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'idTtn' => 'required|string|max:255',
        'json' => 'nullable|string',
        'isPause' => 'required|boolean',
    ];

    public function __construct(TtnstateRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
