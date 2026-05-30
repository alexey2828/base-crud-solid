<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\SilcemRepositoryInterface;
use Illuminate\Http\JsonResponse;

class SilcemController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(SilcemRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function index(): JsonResponse
    {
        $criteria = array_filter(
            request()->only(['id', 'codeBSU', 'code']),
            static fn ($value) => $value !== null && $value !== ''
        );

        $silcem = empty($criteria)
            ? $this->repository->all()
            : $this->repository->search($criteria);

        return response()->json([
            'success' => true,
            'data' => $silcem,
            'total' => $silcem->count(),
        ]);
    }
}
