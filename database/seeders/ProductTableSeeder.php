<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Chewbacca Bluetooth Speaker',
            'price' => 19.99,
            'category_id' => 2,
            'picture' => 'Chewbacca-Bluetooth-Speaker.jpg'
        ]);
        
        Product::create([
            'name' => 'Chewbacca Collectible Figure',
            'price' => 21.44,
            'category_id' => 5,
            'picture' => 'Chewbacca-Collectible-Figure.jpg'
        ]);
        
        Product::create([
            'name' => 'Chewie Plush Toy',
            'price' => 59.99,
            'category_id' => 3,
            'picture' => 'Chewie-Plush-Toy.jpg'
        ]);

        Product::create([
            'name' => 'LEGO Chewbacca Key Chain',
            'price' => 6.89,
            'category_id' => 4,
            'picture' => 'LEGO_Chewbacca-Key-Chain.jpg'
        ]);

        Product::create([
            'name' => 'LEGO Wookie Gunship',
            'price' => 40.19,
            'category_id' => 3,
            'picture' => 'LEGO_Wookiee-Gunship.jpg'
        ]);

        Product::create([
            'name' => 'Wookiee Lunch Kit',
            'price' => 14.99,
            'category_id' => 6,
            'picture' => 'Wookiee-Lunch-Kit.jpg'
        ]);

        Product::create([
            'name' => 'Wookiee Slippers',
            'price' => 27.98,
            'category_id' => 1,
            'picture' => 'Wookiee-Slippers.jpg'
        ]);

        Product::create([
            'name' => 'Wookiee Water Bottle',
            'price' => 26.99,
            'category_id' => 6,
            'picture' => 'Wookiee-Water-Bottle.jpg'
        ]);
    }
}
