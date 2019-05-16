<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Product::class, function (Faker $faker) {
    $title = $faker->name;
    $slug = Str::slug($title);
    return [
        'image' => "http://lorempixel.com/200/200",
        'name' => $title,
        'slug'         => $slug,
        'description'  => $faker->paragraph,
        'instagram'    => 'http://instagram.com/'.Str::random(10),
        'twitter'      => 'http://twitter.com/'.Str::random(10),
        'facebook'     => 'http://facebook.com/'.Str::random(10),
        'website'      => 'http://'.Str::random(10).'.com',
        'status'       => 'approved',
        'user_id'      => 1,
        'category_id'  => rand(1, 7),
    ];
});
