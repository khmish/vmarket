<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\Vendor;
use App\Models\VendorCar;

class VendorCarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VendorCar::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'car_id' => Car::factory(),
            'vendor_id' => Vendor::factory(),
        ];
    }
}
