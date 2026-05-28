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

    public function index(): JsonResponse
    {
        $filters = request()->only(['id', 'idCustomer', 'idPlant', 'dispatcher', 'nameRecipe', 'dateStart', 'dateFinish']);
        
        if (!empty(array_filter($filters))) {
            $data = $this->repository->search($filters);
        } else {
            $data = $this->repository->all();
        }

        return response()->json([
            'success' => true,
            'data' => $data,
            'total' => $data->count(),
        ]);
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
