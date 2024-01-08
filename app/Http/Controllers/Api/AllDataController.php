<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BodyPart;
use App\Models\CompletedExercise;
use App\Models\DifficultyLevel;
use App\Models\Exercise;
use App\Models\User;

class AllDataController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        $bodyParts = BodyPart::all();
        $difficultyLevels = DifficultyLevel::all();
        $users = User::all();

        return response()->json([
            'exercises' => $exercises,
            'body_parts' => $bodyParts,
            'difficulty_levels' => $difficultyLevels,
            'users' => $users
        ]);
    }

    public function stats()
    {
        $stats = CompletedExercise::selectRaw('user_id, count(*) as exercise_count')
            ->groupBy('user_id')
            ->get();

        return response()->json($stats);
    }

    public function getAllExercises()
    {
        return Exercise::all();
    }

    public function getAllBodyParts()
    {
        return BodyPart::all();
    }

    public function getAllDifficultyLevels()
    {
        return DifficultyLevel::all();
    }

    public function getAllUsers()
    {
        $users = User::all();

        return response()->json($users);
    }
}
