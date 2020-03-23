<?php

use App\ProductCategory;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i <= 5; $i++) {
            ProductCategory::create([
                'name'        => $faker->sentence(3),
                'description' => $faker->paragraph,
            ]);
        }
    }
}
