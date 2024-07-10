<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\DeliveryZone;
use App\Models\Vendor;

class DeliveryZoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryZone::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'city_id' => City::factory(),
            'vendor_id' => Vendor::factory(),
            'cost' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
