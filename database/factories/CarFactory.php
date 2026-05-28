<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'codeRFID' => $this->faker->unique()->numerify('RF####'),
            'maxV' => $this->faker->numberBetween(100, 300),
        ];
    }
}
