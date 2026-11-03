<?php

namespace Database\Factories;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintForwardFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'complaint_id' => Complaint::factory(),
            'forwarded_to' => User::factory(),
            'forwarded_at' => fake()->dateTime(),
        ];
    }
}
