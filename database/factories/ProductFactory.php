<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $productName = $this->faker->name();
        $slug = Str::slug($productName);

        return [
            'name' => $productName,
            'slug' => $slug,
            'short_description' => $this->faker->text(100),
            'description' => $this->faker->text(1000),
            'regular_price' => $this->faker->numberBetween(100, 8000),
            'sale_price' => $this->faker->numberBetween(100, 8000),
            'sku' =>  '001-' . time() . rand(1, 1000),
            'stock_status' => 'instock',
            'featured' => true,
            'quantity' => $this->faker->numberBetween(100, 500),
            'image' => 'digital_' . $this->faker->unique()->numberBetween(1, 22),
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
