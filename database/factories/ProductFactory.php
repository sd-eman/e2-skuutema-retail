<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => fake()->name(),
            'barcode' => fake()->regexify('[A-Za-z0-9]{20}'),
            'selling_price' => fake()->randomFloat(2, 0, 999999.99),
            'cost_price' => fake()->randomFloat(2, 0, 999999.99),
        ];
    }
}
