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
            'name' => 'non alkohol',
        ]);

        \App\Models\Category::create([
            'name' => 'berakohol',
        ]);

        \App\Models\Category::create([
            'name' => 'Meat',
        ]);

        \App\Models\Category::create([
            'name' => 'Snack',
        ]);

        \App\Models\Category::create([
            'name' => 'egg',
        ]);

        \App\Models\Category::create([
            'name' => 'Human meat',
        ]);
    }
}
