<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Beer',
            'slug' => 'beer',
            'description' => 'Delicious Weissbeir',
            'price' => 3.99,
            'image' => 'beer.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Rum & coke',
            'slug' => 'rum',
            'description' => 'Rum and coke for your health',
            'price' => 2.99,
            'image' => 'rum.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Martini',
            'slug' => 'martini',
            'description' => 'martini straight up with an olive',
            'price' => 4.99,
            'image' => 'martini.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Hulk',
            'slug' => 'hulk',
            'description' => 'The Incredible Hulk',
            'price' => 5.99,
            'image' => 'hulk.jpg',
        ]);

    }
}
