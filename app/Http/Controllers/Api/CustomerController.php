<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\CustomerRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CustomerController extends BaseApiController
{
    public array $validationRules = [];

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
