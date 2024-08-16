<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'rating' => $this->faker->numberBetween(1, 10),
        ];
    }
}
