<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\CarType;
use App\Models\RefrigeratingType;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'capacity' => $this->faker->randomFloat(0, 0, 9999999999.),
            'car_type_id' => CarType::factory(),
            'refrigerating_type_id' => RefrigeratingType::factory(),
        ];
    }
}
