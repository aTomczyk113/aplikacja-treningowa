<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BodyPart;
use App\Models\CompletedExercise;
use App\Models\DifficultyLevel;
use App\Models\Exercise;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;

/**
 * @OA\Info(
 *     title="My First API Documentation",
 *     version="0.1",
 *     @OA\Contact(
 *         email="info@yeagger.com"
 *     ),
 * )
 * @OA\Server(
 *     description="Learning env",
 *     url="http://trenujemy.test/api/"
 *  )
 */
class AllDataController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/all-data/",
     *     @OA\Response(response="200", description="Fetch all data")
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
     *     path="/api/all-data/stats",
     *     @OA\Response(response="200", description="Fetch stats")
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
     *     path="/api/all-data/exercises",
     *     @OA\Response(response="200", description="Fetch all exercises")
     * )
     */
    public function getAllExercises()
    {
        return Exercise::all();
    }

    /**
     * @OA\Get(
     *     path="/api/all-data/body-parts",
     *     @OA\Response(response="200", description="Fetch all body parts")
     * )
     */
    public function getAllBodyParts()
    {
        return BodyPart::all();
    }

    /**
     * @OA\Get(
     *     path="/api/all-data/difficulty-levels",
     *     @OA\Response(response="200", description="Fetch all difficulty levels")
     * )
     */
    public function getAllDifficultyLevels()
    {
        return DifficultyLevel::all();
    }

    /**
     * @OA\Get(
     *     path="/api/all-data/users",
     *     @OA\Response(response="200", description="Fetch all users")
     * )
     */
    public function getAllUsers()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * @OA\Post(
     *     path="/api/all-data/new-stat",
     *     @OA\Response(response="200", description="Add new stat to user")
     * )
     */
    public function addNewStatToUser(Request $request){
        $excerciseId = $request->input("excerciseId");
        $userId = $request->input("userId");
        $user = User::findOrFail($userId);
        $completedExercise = new CompletedExercise();
        $completedExercise->user_id = $userId;
        $completedExercise->exercise_id = $excerciseId;
        $completedExercise->save();
        return true;
    }

    /**
     * @OA\Get(
     *     path="/api/all-data/total-done-exercise",
     *     @OA\Response(response="200", description="Fetch total done exercise for a specific user")
     * )
     */
    public function getTotalDoneExcercise(Request $request){
        $userid = $request->input("userId");
        $topPerformers = User::withCount('completed_exercises')
            ->where("id",$userid)
            ->get();
        $total =$topPerformers[0]->completed_exercises_count;
        return $total;
    }

    /**
     * @OA\Post(
     *     path="/api/all-data/send-email",
     *     @OA\Response(response="200", description="Send email with total done exercises to a user")
     * )
     */
    public function sendEmailWith(Request $request)
    {
        $userid = $request->input("userId");
//        $userid = 4;
        $topPerformers = User::withCount('completed_exercises')
            ->where("id", $userid)
            ->get();
        $total = $topPerformers[0]->completed_exercises_count;
//    $total = 9;
        $emailText = "Hej, wykonałeś już $total ćwiczeń!";
        $title = "Twoje statystyki.";


        Mail::send(['text' => 'mail'], ["emailText" => $emailText, "title" => $title], function ($message) {
            $message->to('bpoborowski@gmail.com', 'Tutorials Point')->subject
            ('Twoje statystyki');
            $message->from('trening@obrazomania.pl', 'FitnesGym');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    /**
     * @OA\Post(
     *     path="/api/all-data/create-exercise",
     *     @OA\Response(response="200", description="Create a new exercise")
     * )
     */
    public function createNewExercise(Request $request) {
        $name = $request->input("name");
        $desc = $request->input("description");
        $body_part_id = $request->input("body_part_id");
        $difficulty_level_id = $request->input("difficulty_level_id");
        $idForEdit = $request->input("id");

        if($idForEdit) {
            $exercise = Exercise::findOrFail($idForEdit);
        } else {
            $exercise = new Exercise();
        }
        $exercise->name = $name;
        $exercise->description = $desc;
        $exercise->body_part_id = $body_part_id;
        $exercise->difficulty_level_id = $difficulty_level_id;
        $exercise->save();

        return $exercise;
    }

    /**
     * @OA\Delete(
     *     path="/api/all-data/delete-exercise/{id}",
     *     @OA\Response(response="200", description="Delete an exercise")
     * )
//     */
//    public function deleteExercise($id) {
//        $exercise = Exercise::findOrFail($id);
//        $exercise->delete();
//
//        return response()->json(["message" => "Exercise deleted successfully"], 200);
//    }
    public function updateExercise(Request $request, $id) {
        $exercise = Exercise::findOrFail($id);

        $exercise->name = $request->input("name");
        $exercise->description = $request->input("description");
        $exercise->body_part_id = $request->input("body_part_id");
        $exercise->difficulty_level_id = $request->input("difficulty_level_id");

        $exercise->save();

        return response()->json($exercise);
    }
    public function deleteExercise($id) {
        $exercise = Exercise::find($id);
        if ($exercise) {
            $exercise->delete();
            return response()->json(['message' => 'Exercise deleted successfully.'], 200);
        }

        return response()->json(['message' => 'Exercise not found.'], 404);
    }


    /**
     * @OA\Get(
     *     path="/api/all-data/top-performers",
     *     @OA\Response(response="200", description="Get top performers")
     * )
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
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User successfully registered', 'user' => $user], 201);
    }
}
