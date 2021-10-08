<?php

namespace Database\Factories;

use App\Models\Rental;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomNumber(5),
            'bedrooms' => $this->faker->randomNumber(1),
            'bathrooms' => $this->faker->randomNumber(1),
            'storeys' => $this->faker->randomNumber(1),
            'garages' => $this->faker->randomNumber(1),
        ];
    }
}
