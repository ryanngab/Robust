<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // user star
            // \App\Models\User::factory(10)->create();
            \App\Models\Product::create([
                'name' => 'bengbeng',
                'price' => '400000',
                'category_id' => '1',
                'description' => 'Enak loh'
            ]);

            \App\Models\Product::create([
                'name' => 'oreo',
                'price' => '400000',
                'category_id' => '4',
                'description' => 'Enak loh'
            ]);

            \App\Models\Product::create([
                'name' => 'yakull',
                'price' => '400000',
                'category_id' => '2',
                'description' => 'Enak loh'
            ]);

            \App\Models\Product::create([
                'name' => 'Yougut',
                'price' => '400000',
                'category_id' => '3',
                'description' => 'Enak loh'
            ]);
        // end user

        // Category_id start
            \App\Models\Category::create([
            'name' => 'Minuman non alkohol',
            ]);

            \App\Models\Category::create([
                'name' => 'Minuman berakohol',
            ]);

            \App\Models\Category::create([
                'name' => 'Meat',
            ]);

            \App\Models\Category::create([
                'name' => 'Minuman',
            ]);

            \App\Models\Category::create([
                'name' => 'Minuman',
            ]);

            \App\Models\Category::create([
                'name' => 'Minuman',
            ]);
        // Category_id end

    }
}
