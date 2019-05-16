<?php

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
        DB::table('categories')->truncate();

        $categories = [
            [
                'name' => 'komunitas',
                'background' => '#6edcc4',
                'gradient' => '#1aab8b'
            ],
            [
                'name' => 'startup',
                'background' => '#ffc73c',
                'gradient' => '#f19a1a'
            ],
            [
                'name' => 'art',
                'background' => '#b372bd',
                'gradient' => '#8b60ed'
            ],
            [
                'name' => 'cafe',
                'background' => '#1a518a',
                'gradient' => '#293d42'
            ],
            [
                'name' => 'media',
                'background' => '#21c8f6',
                'gradient' => '#637bff'
            ],
            [
                'name' => 'wisata',
                'background' => '#ed60bb',
                'gradient' => '#aa72bd'
            ],
            [
                'name' => 'lainnya',
                'background' => '#f1902d',
                'gradient' => '#b9590a'
            ],
        ];

        foreach ($categories as $category) {
            // #f44881,#ec454f
            // #21c8f6,#637bff
            // #6edcc4,#1aab8b
            // #f19a1a,#ffc73c
            // #8b60ed,#b372bd
            // #1a518a,#293d42
            // #ed60bb,#aa72bd
            // #f1902d,#b9590a

            // echo $category;
            DB::table('categories')->insert([
                'name'       => $category['name'],
                'background' => $category['background'],
                'gradient'   => $category['gradient'],
                'slug'       => Str::slug($category['name']),
                'status'     => 'approved',
                'user_id'    => 1,
            ]);
        }
    }
}
