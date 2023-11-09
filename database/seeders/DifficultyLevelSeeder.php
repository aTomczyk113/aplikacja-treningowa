<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DifficultyLevel;

class DifficultyLevelSeeder extends Seeder
{
    public function run()
    {
        $difficultyLevels = ["Łatwy", "Średni", "Zaawansowany"];

        foreach ($difficultyLevels as $level) {
            DifficultyLevel::create(['name' => $level]);
        }
    }
}
