<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'image' => 'assets/img/product-3.jpg',
            'price' => 64000,
            'sku' => 'RFS'.rand(111,899),
            'title' => 'Magic Clasp',
            'description' => 'training worked lorem ipsum outdoors,Ideal for cold-weathered, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat Lorem ipsum',
            'label' => 'New',
            'view' => 1,
            'manufacturer' => 'Nike'
        ]);

    }
}
