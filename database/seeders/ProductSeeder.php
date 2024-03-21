<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(Faker $faker): void
  {
    Product::factory( count: 5 )->create();

    //$categories_ids = Category::all()->pluck('id');
    /*
    for($i = 0; $i < 100; $i++) {
      $isFeatured = $i < 5 ? 1 : 0;

      $new_product = new Product([
        'category_id' => $categories_ids->random(),
        'name' => $faker->words(rand(2, 3), true),
        'description' => $faker->paragraph(3),
        'url' => "https://picsum.photos/id/" . $i + 1 . "/200/300",
        'ean' => $faker->ean13(),
        'price' => $faker->randomFloat(2, 20, 99),
        'is_featured' => $isFeatured
      ]);

      $new_product->save();
    }
    */
  }
}
