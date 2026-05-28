<?php

namespace App\Contracts\Services;

interface AnalizeTotalVServiceInterface
{
    /**
     * Analyze data and return arrays for charting
     *
     * @param array $params
     * @return array
     */
    public function analyze(array $params): array;
}
