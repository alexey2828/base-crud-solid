<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\CompRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(CompRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getWorking(): JsonResponse
    {
        $comp = $this->repository->getWorkingComp();

        return response()->json([
            'success' => true,
            'data' => $comp,
        ]);
    }
}
