<?php

namespace Database\Factories;

use App\Models\Bsu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bsu>
 */
class BsuFactory extends Factory
{
    protected $model = Bsu::class;

    public function definition(): array
    {
        return [
            'codePlant' => fake()->word(),
            'code' => fake()->unique()->word(),
            'name' => fake()->sentence(),
            'vMixer' => fake()->randomFloat(2, 50, 500),
            'isWork' => fake()->boolean(),
        ];
    }
}
