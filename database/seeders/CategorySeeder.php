<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
    }
}
