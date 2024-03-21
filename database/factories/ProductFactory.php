<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
  protected $model = Product::class;
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $categories_ids = Category::all()->pluck('id');

    return [
      'category_id' => fake()->randomElement($categories_ids),
      'name' => fake()->word(),
      'description' => fake()->paragraph(),
      'url' => 'https://picsum.photos/id/5/200/300',
      'ean' => fake()->ean13(),
      'price' => fake()->randomFloat(2, 20, 99),
      'is_featured' => 0
    ];
  }
}
