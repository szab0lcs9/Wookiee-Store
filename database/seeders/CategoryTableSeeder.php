<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Clothing']);
        Category::create(['name' => 'Electronics']);
        Category::create(['name' => 'Toys & Hobbies']);
        Category::create(['name' => 'Accessories']);
        Category::create(['name' => 'Collectibles']);
        Category::create(['name' => 'Travel']);
        Category::create(['name' => 'Other']);
    }
}
