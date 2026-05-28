<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface CarRepositoryInterface extends RepositoryInterface
{
    /**
     * Get all cars with specific fields
     *
     * @return Collection
     */
    public function getAllWithSpecificFields(): Collection;
    
    /**
     * Get car by RFID code
     *
     * @param string $codeRFID
     * @return mixed
     */
    public function getByRFID(string $codeRFID);
    
    /**
     * Get cars with max velocity greater than specified value
     *
     * @param float $value
     * @return Collection
     */
    public function getCarsWithSpeedGreaterThan(float $value): Collection;
    
    /**
     * Search cars by name
     *
     * @param string $search
     * @return Collection
     */
    public function searchByName(string $search): Collection;
}