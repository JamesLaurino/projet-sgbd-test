<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->paragraph(7,true)
        ];
    }
}
