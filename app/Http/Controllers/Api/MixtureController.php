<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\MixtureRepositoryInterface;
use Illuminate\Http\JsonResponse;

class MixtureController extends BaseApiController
{
    public array $validationRules = [
        'name' => 'required|string|max:50',
        'code' => 'required|string|max:50',
        'typeCode' => 'required|numeric|min:0',
    ];

    public function __construct(MixtureRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getWorking(): JsonResponse
    {
        $mixture = $this->repository->getWorkingMixture();

        return response()->json([
            'success' => true,
            'data' => $mixture,
        ]);
    }
}
