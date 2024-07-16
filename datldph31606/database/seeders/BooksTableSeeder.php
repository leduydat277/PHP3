<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('books')->insert([
                'title' => fake()->text(10),
                'thumbnail' => fake()->imageUrl(),
                'author' => fake()->text(5),
                'publisher' => fake()->text(7),
                'publication' => fake()->dateTimeThisYear(),
                'price' => fake()->numberBetween(),
                'quantity' => fake()->numberBetween(),
                'category_id' => rand(1, 5),
            ]);
        }
    }
}
