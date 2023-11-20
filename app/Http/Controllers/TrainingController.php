<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BodyPart;
use App\Models\DifficultyLevel;
use App\Models\Exercise;

class TrainingController extends Controller
{
    public function index()
    {
        $body_parts = BodyPart::all(); // Pobieranie wszystkich body parts

        return view('treningi', ['body_parts' => $body_parts]); // Przekazanie body parts do widoku
    }
    public function klatka()
    {
        $bodyPart = BodyPart::where('name', 'Klatka')->first();
        $exercises = $bodyPart->exercises;

        return view('klatka_trening', ['exercises' => $exercises]);
    }

    public function plecy()
    {
        // Tu umieść kod dla treningu pleców
        return view('plecy_trening');
    }

    public function nogi()
    {
        // Tu umieść kod dla treningu nóg
        return view('nogi_trening');
    }

    public function biceps()
    {
        // Tu umieść kod dla treningu bicepsa
        return view('biceps_trening');
    }

    public function showBodyPartExercises($bodyPart)
    {
        $bodyPart = BodyPart::where('name', $bodyPart)->first();
        $difficultyLevels = DifficultyLevel::all();

        if($bodyPart === null) {
            abort(404, 'Nie znaleziono ćwiczeń dla tej partii ciała');
        }

        return view('choose_difficulty', [
            'difficulty_levels' => $difficultyLevels,
            'bodyPart' => $bodyPart,
        ]);
    }
    public function chooseDifficulty($bodyPart)
    {
        // Pobierz wszystkie dostępne poziomy trudności.
        $difficultyLevels = DifficultyLevel::all();

        // Zwróć widok choose_difficulty i przekaż do niego
        // zmienną $difficultyLevels oraz $bodyPart.
        return view('choose_difficulty', [
            'difficulty_levels' => $difficultyLevels,
            'bodyPart' => $bodyPart,
        ]);
    }

    public function showExercises(Request $request, $bodyPart, $difficulty)
    {
        // Pobieranie wykonanych ćwiczeń z sesji
        $completedExercises = $request->session()->get('completed_exercises', []);

        // Pobranie losowego ćwiczenia, które jeszcze nie zostało wykonane
        $exercise = Exercise::where('body_part_id', $bodyPart)
            ->where('difficulty_level_id', $difficulty)
            ->whereNotIn('id', $completedExercises)
            ->inRandomOrder()
            ->first();

        if ($exercise === null) {
            // Jeżeli nie znaleziono ćwiczenia, oznacza to, że wszystkie już zostały wykonane
            $request->session()->forget('completed_exercises');
            return redirect()->route('chooseDifficulty', ['bodyPart' => $bodyPart]);
        }

        // Dodawanie ID ćwiczenia do sesji
        $completedExercises[] = $exercise->id;
        $request->session()->put('completed_exercises', $completedExercises);

        return view('exercises', ['exercise' => $exercise]);
    }
}
