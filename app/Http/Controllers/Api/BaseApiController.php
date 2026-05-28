<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\RepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

abstract class BaseApiController
{
    public RepositoryInterface $repository;

    public array $validationRules = [];

    protected array $allowedFields = ['*'];

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index(): JsonResponse
    {
        $data = $this->repository->all();

        return response()->json([
            'success' => true,
            'data' => $data,
            'total' => $data->count(),
        ]);
    }

    public function show(int $id): JsonResponse
    {
        $record = $this->repository->find($id);

        if (! $record) {
            return response()->json([
                'success' => false,
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $record,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate($this->validationRules);

        $record = $this->repository->create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Record created successfully',
            'data' => $record,
        ], 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $record = $this->repository->update($id, $request->all());

        if (! $record) {
            return response()->json([
                'success' => false,
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Record updated successfully',
            'data' => $record,
        ]);
    }

    public function destroy(int $id): JsonResponse
    {
        $deleted = $this->repository->delete($id);

        if (! $deleted) {
            return response()->json([
                'success' => false,
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Record deleted successfully',
        ]);
    }
}
