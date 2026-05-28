<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\OrderStateRepositoryInterface;
use Illuminate\Http\JsonResponse;

class OrderStateController extends BaseApiController
{
    public array $validationRules = [
        'name' => 'required|string|max:50',
        'code' => 'required|string|max:50',
        'typeCode' => 'required|numeric|min:0',
    ];

    public function __construct(OrderStateRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getWorking(): JsonResponse
    {
        $orderState = $this->repository->getWorkingOrderState();

        return response()->json([
            'success' => true,
            'data' => $orderState,
        ]);
    }
}
