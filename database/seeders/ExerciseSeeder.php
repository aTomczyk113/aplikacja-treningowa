<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;
use App\Models\BodyPart;
use App\Models\DifficultyLevel;

class ExerciseSeeder extends Seeder
{
    public function run()
    {
        $bodyParts = BodyPart::all();
        $difficultyLevels = DifficultyLevel::all();

        Exercise::factory(10)->create([
            'body_part_id' => $bodyParts->random()->id,
            'difficulty_level_id' => $difficultyLevels->random()->id,
        ]);
    }

}
