<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     DB::table('products')->truncate();

    //     for ($i=0; $i < 30; $i++) { 
    //         $title = Str::random(7);
    //         DB::table('products')->insert([
    //             'product_logo' => "http://lorempixel.com/200/200",
    //             'product_name' => $title,
    //             'slug' => Str::slug($title),
    //             'description' => Str::random(10),
    //             'instagram' => Str::random(10),
    //             'twitter' => Str::random(10),
    //             'facebook' => Str::random(10),
    //             'website' => Str::random(10),
    //             'phone' => Str::random(10),
    //             'status' => Str::random(10),
    //             'user_id' => Str::random(10),
    //             'category_id' => Str::random(10),

    //             // 'name'       => $product['name'],
    //             // 'background' => $product['background'],
    //             // 'gradient'   => $product['gradient'],
    //             // 'slug'       => Str::slug($product['name']),
    //             // 'status'     => 'approved',
    //             // 'user_id'    => 1,
    //         ]);
    //     }
    }
}
