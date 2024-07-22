<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table("shoes")->insert([
                'name' => fake()->text(10),
                'size' => rand(38, 43),
                'color' => fake()->colorName(),
                'price' => rand(1000000,10000000),
                'image' => fake()->imageUrl(),
                'quantity' => rand(10, 1000),
                'content' => fake()->text(50),
                'category_id' => rand(1, 4),
            ]);
        }
    }
}
