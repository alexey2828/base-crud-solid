<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\WeightmanualRepositoryInterface;

class WeightmanualController extends BaseApiController
{
    public array $validationRules = [
        'indProduct' => 'required|string|max:255',
        'numLoop' => 'required|string|max:255',
        'code' => 'required|string|max:255',
        'weight' => 'required|string|max:255',
        'dispenser' => 'required|string|max:255',
        'idProduct' => 'required|string|max:255',
    ];

    public function __construct(WeightmanualRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
