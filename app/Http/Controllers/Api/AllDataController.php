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

    public function getTotalDoneExcercise(Request $request){
           $userid = $request->input("userId");
            $topPerformers = User::withCount('completed_exercises')
            ->where("id",$userid)
            ->get();
        $total =$topPerformers[0]->completed_exercises_count;
        return $total;
    }

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

    public function deleteExercise($id) {
        $exercise = Exercise::findOrFail($id);
        $exercise->delete();

        return response()->json(["message" => "Exercise deleted successfully"], 200);
    }



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
