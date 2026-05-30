<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\RoleRepositoryInterface;
use Illuminate\Http\JsonResponse;

class RoleController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(RoleRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function index(): JsonResponse
    {
        $criteria = array_filter(
            request()->only(['id', 'code', 'name']),
            static fn ($value) => $value !== null && $value !== ''
        );

        $roles = empty($criteria)
            ? $this->repository->all()
            : $this->repository->search($criteria);

        return response()->json([
            'success' => true,
            'data' => $roles,
            'total' => $roles->count(),
        ]);
    }
}
