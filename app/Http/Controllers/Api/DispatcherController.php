<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\DispatcherRepositoryInterface;
use Illuminate\Http\JsonResponse;

class DispatcherController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(DispatcherRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getWorking(): JsonResponse
    {
        $dispatcher = $this->repository->getWorkingDispatcher();

        return response()->json([
            'success' => true,
            'data' => $dispatcher,
        ]);
    }
}
