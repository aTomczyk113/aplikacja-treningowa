<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(BodyPartSeeder::class);
        $this->call(DifficultyLevelSeeder::class);
        $this->call(ExerciseSeeder::class);
    }
}
