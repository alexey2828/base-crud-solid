<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\CustomerRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CustomerController extends BaseApiController
{
    public array $validationRules = [
        'name' => 'required|string|max:50',
        'code' => 'required|string|max:50',
        'typeCode' => 'required|numeric|min:0',
    ];

    public function __construct(CustomerRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getWorking(): JsonResponse
    {
        $customer = $this->repository->getWorkingCustomer();

        return response()->json([
            'success' => true,
            'data' => $customer,
        ]);
    }
}
