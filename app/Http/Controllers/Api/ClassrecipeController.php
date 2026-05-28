<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\ClassrecipeRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ClassrecipeController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(ClassrecipeRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getWorking(): JsonResponse
    {
        $classrecipe = $this->repository->getWorkingClassrecipe();

        return response()->json([
            'success' => true,
            'data' => $classrecipe,
        ]);
    }
}
