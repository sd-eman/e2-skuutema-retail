<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'type' => fake()->regexify('[A-Za-z0-9]{50}'),
            'message' => fake()->word(),
            'is_read' => fake()->boolean(),
        ];
    }
}
