<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BodyPart;
use App\Models\CompletedExercise;
use App\Models\DifficultyLevel;
use App\Models\Exercise;
use App\Models\User;

/**
 * @OA\Info(title="My API", version="1.0.0")
 */

class AllDataController extends Controller
{
    /**
     * @OA\Get(
     *    path="/api/all_data",
     *    @OA\Response(response="200", description="Get All Data")
     * )
     */
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

    /**
     * @OA\Get(
     *    path="/api/stats",
     *    @OA\Response(response="200", description="Get Statistics")
     * )
     */
    public function stats()
    {
        $stats = CompletedExercise::selectRaw('user_id, count(*) as exercise_count')
            ->groupBy('user_id')
            ->get();

        return response()->json($stats);
    }

    /**
     * @OA\Get(
     *    path="/api/exercises",
     *    @OA\Response(response="200", description="Get All Exercises")
     * )
     *
     */

    public function getAllExercises()
    {
        return Exercise::all();
    }

    /**
     * @OA\Get(
     *    path="/api/body_parts",
     *    @OA\Response(response="200", description="Get All Body Parts")
     * )
     *
     */
    public function getAllBodyParts()
    {
        return BodyPart::all();
    }

    /**
     * @OA\Get(
     *    path="/api/difficulty_levels",
     *    @OA\Response(response="200", description="Get All Difficulty Levels")
     * )
     *
     */
    public function getAllDifficultyLevels()
    {
        return DifficultyLevel::all();
    }

    /**
     * @OA\Get(
     *    path="/api/users",
     *    @OA\Response(response="200", description="Get All Users")
     * )
     *
     */
    public function getAllUsers()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * @OA\Get(
     *    path="/api/top-performers",
     *    @OA\Response(response="200", description="Get Top Performers")
     * )
     *
     */
    public function getTopPerformers()
    {
        $topPerformers = User::withCount('completed_exercises')
            ->orderBy('completed_exercises_count', 'desc')
            ->take(10)
            ->get();

        return response()->json([
            'topPerformers' => $topPerformers
        ]);
    }

    public function indexView()
    {
        $exercises = Exercise::all();
        return response()->json($exercises);
    }

    public function getExercises()
    {
        $exercises = Exercise::all();
        return response()->json($exercises);
    }

    public function storeExercise(Request $request)
    {
        $exercise = Exercise::create($request->all());
        return response()->json($exercise, 201);
    }

    public function getExercise($id)
    {
        $exercise = Exercise::find($id);
        return response()->json($exercise);
    }

    public function updateExercise(Request $request, $id)
    {
        $exercise = Exercise::find($id);
        $exercise->update($request->all());
        return response()->json($exercise);
    }

    public function deleteExercise($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();
        return response()->json(null, 204);
    }

}
