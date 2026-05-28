<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\TtnRepositoryInterface;

class TtnController extends BaseApiController
{
    public array $validationRules = [
        'date' => 'required|string|max:255',
        'idPlant' => 'required|string|max:255',
        'idOrder' => 'nullable|string|max:255',
        'dispatcher' => 'required|string|max:255',
        'vProduct' => 'required|string|max:255',
        'driver' => 'required|string|max:255',
        'car' => 'required|string|max:255',
        'finishAdress' => 'nullable|string|max:255',
        'finishDate' => 'nullable|string|max:255',
        'state' => 'required|string|max:255',
        'isPause' => 'required|boolean',
        'idProduct' => 'required|string|max:255',
        'idBsu' => 'required|string|max:255',
    ];

    public function __construct(TtnRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
