<?php

namespace Database\Factories;

use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'store_id' => Store::factory(),
            'description' => fake()->text(),
            'phone' => fake()->phoneNumber(),
            'name' => fake()->name(),
            'status' => fake()->regexify('[A-Za-z0-9]{30}'),
            'received_at' => fake()->dateTime(),
            'handled_by' => null,
            'note' => fake()->text(),
        ];
    }
}
