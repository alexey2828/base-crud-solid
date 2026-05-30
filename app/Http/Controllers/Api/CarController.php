<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\CarRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CarController extends BaseApiController
{
    public function __construct(CarRepositoryInterface $repository)
    {
        parent::__construct($repository);

        $this->validationRules = config('models.car.validation');
    }

    public function getFastCars(): JsonResponse
    {
        $cars = $this->repository->getCarsWithSpeedGreaterThan(200);

        return response()->json([
            'success' => true,
            'data' => $cars,
            'total' => $cars->count(),
        ]);
    }
}
