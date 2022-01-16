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
            'image' => 'storage\Chewbacca-Bluetooth-Speaker.jpg'
        ]);
        
        Product::create([
            'name' => 'Chewbacca Collectible Figure',
            'price' => 21.44,
            'category_id' => 5,
            'image' => 'storage\Chewbacca-Collectible-Figure.jpg'
        ]);
        
        Product::create([
            'name' => 'Chewie Plush Toy',
            'price' => 59.99,
            'category_id' => 3,
            'image' => 'storage\Chewie-Plush-Toy.jpg'
        ]);

        Product::create([
            'name' => 'LEGO Chewbacca Key Chain',
            'price' => 6.89,
            'category_id' => 4,
            'image' => 'storage\LEGO_Chewbacca-Key-Chain.jpg'
        ]);

        Product::create([
            'name' => 'LEGO Wookie Gunship',
            'price' => 40.19,
            'category_id' => 3,
            'image' => 'storage\LEGO_Wookiee-Gunship.jpg'
        ]);

        Product::create([
            'name' => 'Wookiee Lunch Kit',
            'price' => 14.99,
            'category_id' => 6,
            'image' => 'storage\Wookiee-Lunch-Kit.jpg'
        ]);

        Product::create([
            'name' => 'Wookiee Slippers',
            'price' => 27.98,
            'category_id' => 1,
            'image' => 'storage\Wookiee-Slippers.jpg'
        ]);

        Product::create([
            'name' => 'Wookiee Water Bottle',
            'price' => 26.99,
            'category_id' => 6,
            'image' => 'storage\Wookiee-Water-Bottle.jpg'
        ]);
    }
}
