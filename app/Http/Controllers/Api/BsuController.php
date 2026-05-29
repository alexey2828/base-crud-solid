<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\BsuRepositoryInterface;
use Illuminate\Http\JsonResponse;

class BsuController extends BaseApiController
{
    public array $validationRules = [
        'codePlant' => 'required|string|max:50',
        'code' => 'required|string|max:50',
        'name' => 'required|string|max:255',
        'vMixer' => 'required|numeric|min:0',
        'isWork' => 'boolean',
    ];

    public function __construct(BsuRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function index(): JsonResponse
    {
        $criteria = array_filter(
            request()->only(['id', 'codePlant', 'code', 'name', 'vMixer', 'isWork']),
            static fn ($value) => $value !== null && $value !== ''
        );

        $bsu = empty($criteria)
            ? $this->repository->all()
            : $this->repository->search($criteria);

        return response()->json([
            'success' => true,
            'data' => $bsu,
            'total' => $bsu->count(),
        ]);
    }

    public function getWorking(): JsonResponse
    {
        $bsu = $this->repository->getWorkingBsu();

        return response()->json([
            'success' => true,
            'data' => $bsu,
        ]);
    }
}
