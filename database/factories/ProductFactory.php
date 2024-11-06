<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
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
            'name' => fake()->words(3, true),
            'slug' => Str::slug(fake()->unique()->words(3, true)),
            'description' => fake()->paragraph(3),
            'price' => fake()->numberBetween(10000, 100000),
            'stock' => fake()->numberBetween(1, 100),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'image' => fake()->imageUrl(640, 480, 'products', true, 'Faker'),
            'is_active' => fake()->boolean(80), // 80% kemungkinan true
        ];
    }
}
