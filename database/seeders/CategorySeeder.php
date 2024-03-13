<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $csvCategoriesFile = database_path('csv/categories.csv');
    $csvCategoriesData = array_map('str_getcsv', file($csvCategoriesFile));

    $currTimeStamp = Carbon::now();

    foreach($csvCategoriesData as $row) {
      DB::table('categories')->insert([
        'name' => $row[0],
        'hex' => $row[1],
        'created_at' => $currTimeStamp,
        'updated_at' => $currTimeStamp
      ]);
    }
  }
}
