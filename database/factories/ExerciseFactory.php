<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Exercise;
use Illuminate\Support\Str;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'body_part_id' => $this->faker->numberBetween(1, 4), // Przykładowa partia ciała
            'difficulty_level_id' => $this->faker->numberBetween(1, 3), // Przykładowy poziom trudności
        ];
    }
}


