<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 5; $i++) {
            student::create([
                'name'   => fake()->name(),
                'emails' => fake()->unique()->email()
            ]);
        }
    }
}
