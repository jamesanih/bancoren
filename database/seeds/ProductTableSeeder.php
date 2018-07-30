<?php

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
        $product = new \App\Product([
        	'imagePath'=>'image/pix.jpg',
        	'title' => 'st Gregory college',
        	'description'=> 'Nice Secondary School, the best in the world',
        	'price' => 10
        ]);
        $product->save();


        $product = new \App\Product([
        	'imagePath'=>'image/pix.jpg',
        	'title' => 'st Gregory college badge',
        	'description'=> 'Nice Secondary School, the best in the world',
        	'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=>'image/pix.jpg',
        	'title' => 'st Gregory college Ikoyi Lagos',
        	'description'=> 'Nice Secondary School, the best in the world',
        	'price' => 10
        ]);
        $product->save();
    }
}
