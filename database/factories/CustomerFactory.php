<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'address' => fake()->word(),
            'email' => fake()->safeEmail(),
            'contact_person' => fake()->regexify('[A-Za-z0-9]{100}'),
            'password' => fake()->password(),
        ];
    }
}
