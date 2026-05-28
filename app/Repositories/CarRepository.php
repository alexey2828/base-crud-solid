<?php

// app/Repositories/CarRepository.php

namespace App\Repositories;

use App\Contracts\Repositories\CarRepositoryInterface;
use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

class CarRepository extends BaseRepository implements CarRepositoryInterface
{
    public function __construct(Car $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'name', 'codeRFID', 'maxV')->get();
    }

    // Специфичные методы для Car
    public function getByRFID(string $rfid): ?Car
    {
        return $this->model->where('codeRFID', $rfid)->first();
    }

    public function getCarsWithSpeedGreaterThan(float $speed): Collection
    {
        return $this->model->where('maxV', '>', $speed)->get();
    }

    public function searchByName(string $search): Collection
    {
        return $this->model->where('name', 'like', "%{$search}%")->get();
    }
}
