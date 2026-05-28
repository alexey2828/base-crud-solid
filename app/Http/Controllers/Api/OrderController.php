<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\OrderRepositoryInterface;
use Illuminate\Http\JsonResponse;

class OrderController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(OrderRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getWorking(): JsonResponse
    {
        $order = $this->repository->getWorkingOrder();

        return response()->json([
            'success' => true,
            'data' => $order,
        ]);
    }
}
