<?php

namespace Database\Factories;

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

            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(200000, 5000000),
            'category_id' => function () {
                return \App\Models\Category::all()->random()->id;
            },
            'brand_id' => function () {
                return \App\Models\Brand::all()->random()->id;
            },
            'stock' => fake()->numberBetween(1, 100),
            'image' => fake()->imageUrl(),
            'production_date' => fake()->dateTimeBetween('-5 years', 'now'),
        ];
    }
}
