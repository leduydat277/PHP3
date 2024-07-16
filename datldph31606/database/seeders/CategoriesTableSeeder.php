<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => fake()->text(5)],
            ['name' => fake()->text(5)],
            ['name' => fake()->text(5)],
            ['name' => fake()->text(5)],
            ['name' => fake()->text(5)]
        ]);
    }
}
