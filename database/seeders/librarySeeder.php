<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\library;

class librarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 5; $i++) {
            library::create([
                'book'      => fake()->word(),
                'due_date'  => fake()->dateTimeThisYear(),
                'status'    => fake()->numberBetween(0, 1),
            ]);
        }
    }
}
