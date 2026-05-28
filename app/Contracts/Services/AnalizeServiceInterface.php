<?php

namespace App\Contracts\Services;

interface AnalizeServiceInterface
{
    /**
     * Analyze data and return arrays for charting
     *
     * @param array $params
     * @return array
     */
    public function analyze(array $params): array;
}
