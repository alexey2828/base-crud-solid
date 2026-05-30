<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\RecfrostRepositoryInterface;
use Illuminate\Http\JsonResponse;

class RecfrostController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(RecfrostRepositoryInterface $repository)
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
