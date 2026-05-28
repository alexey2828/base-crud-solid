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

    public function getByRFID(string $rfid): JsonResponse
    {
        $car = $this->repository->getByRFID($rfid);

        return $car
            ? response()->json(['success' => true, 'data' => $car])
            : response()->json(['success' => false], 404);
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
