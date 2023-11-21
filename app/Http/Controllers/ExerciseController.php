<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function nextExercise(Request $request, $bodyPartId, $difficultyLevelId)
    {
        // Pobieranie wykonanych ćwiczeń z sesji
        $completedExercises = $request->session()->get('completed_exercises', []);

        // Wyszukiwanie ćwiczeń pasujących do wybranych kryteriów, które jeszcze nie zostały wykonane
        $exercises = Exercise::where('body_part_id', $bodyPartId)
            ->where('difficulty_level_id', $difficultyLevelId)
            ->whereNotIn('id', $completedExercises)
            ->get();

        if ($exercises->isEmpty()) {
            // Jeśli wszystkie ćwiczenia zostały wykonane, czyszczenie sesji
            $request->session()->forget('completed_exercises');
            return view('exercise_completed');
        }

        // Losowanie jednego z ćwiczeń
        $exercise = $exercises->random();

        // Dodawanie ID ćwiczenia do sesji
        $completedExercises[] = $exercise->id;
        $request->session()->put('completed_exercises', $completedExercises);

        // Dodawanie ćwiczenia do wykonanych dla zalogowanego użytkownika
        $user = auth()->user();
        $user->markExerciseAsCompleted($exercise->id);

        return view('exercises', ['exercise' => $exercise]);
    }
}
