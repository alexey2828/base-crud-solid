<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\DriverRepositoryInterface;
use Illuminate\Http\JsonResponse;

class DriverController extends BaseApiController
{
    public array $validationRules = [
        'name' => 'required|string|max:50',
        'code' => 'required|string|max:50',
        'typeCode' => 'required|numeric|min:0',
    ];

    public function __construct(DriverRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getWorking(): JsonResponse
    {
        $driver = $this->repository->getWorkingDriver();

        return response()->json([
            'success' => true,
            'data' => $driver,
        ]);
    }
}
