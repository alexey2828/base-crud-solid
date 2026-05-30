<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\MainstateRepositoryInterface;
use Illuminate\Http\JsonResponse;

class MainstateController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(MainstateRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function index(): JsonResponse
    {
        $criteria = array_filter(
            request()->only(['id', 'code']),
            static fn ($value) => $value !== null && $value !== ''
        );

        $items = empty($criteria)
            ? $this->repository->all()
            : $this->repository->search($criteria);

        return response()->json([
            'success' => true,
            'data' => $items,
            'total' => $items->count(),
        ]);
    }
}
