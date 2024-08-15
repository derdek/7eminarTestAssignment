<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(1),
            'description' => fake()->sentence(9),
            'status' => fake()->randomElement(['open', 'closed']),
        ];
    }
}
