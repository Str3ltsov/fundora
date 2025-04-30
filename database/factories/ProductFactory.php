<?php

namespace Database\Factories;

use App\Models\ProductCountry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "address" => fake()->address(),
            "image" => "example.jpg",
            "description" => fake()->text(rand(50, 100)),
            "price" => "Price from 190,000$, Villa area: 102 m² / Plot: 120 m",
            "main_advantages" => fake()->text(50),
            "is_visible" => fake()->boolean(100),
            "country_id" => fake()->numberBetween(1, ProductCountry::count())
        ];
    }
}
