<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;
use App\Models\BodyPart;
use App\Models\DifficultyLevel;

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

    //Utwórz ćwiczenie
    public function store(Request $request)
    {
        $exercise = new Exercise;
        $exercise->name = $request->name;
        $exercise->description = $request->description;
        $exercise->body_part_id = $request->body_part_id;
        $exercise->difficulty_level_id = $request->difficulty_level_id;
        $exercise->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Exercise saved successfully'
        ]);
    }

    //Czytaj ćwiczenie
    public function show($id)
    {
        $exercise = Exercise::find($id);
        return response()->json($exercise);
    }

    //Aktualizuj ćwiczenie
    public function update(Request $request, $id)
    {
        $exercise = Exercise::find($id);
        if ($exercise) {
            $exercise->name = $request->input('name');
            $exercise->description = $request->input('description');
            $exercise->body_part_id = $request->input('body_part_id');
            $exercise->difficulty_level_id = $request->input('difficulty_level_id');
            $exercise->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Exercise updated successfully'
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Exercise not found'
        ], 404);
    }

    //Usuń ćwiczenie
    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Exercise deleted successfully'
        ]);
    }
// Zwraca listę wszystkich ćwiczeń z widokiem
    public function indexView()
    {
        $exercises = Exercise::all();
        return view('exercises.index', ['exercises' => $exercises]);
    }

    // Zwraca widok formularza do utworzenia nowego ćwiczenia
    public function createView()
    {
        $parts = BodyPart::all();
        $levels = DifficultyLevel::all();
        return view('exercises.create', compact('parts', 'levels'));
    }

    // Zapisuje nowe ćwiczenie i przekierowuje do listy
    public function storeView(Request $request)
    {
        $newExercise = $this->store($request);
        // Sprawdź, czy utworzenie nowego ćwiczenia powiodło się, zanim przekierujesz użytkownika
        if($newExercise->status === 'success') {
            return redirect()->route('exercises.indexView');
        }
        return back()->withErrors(['message' => 'Exercise creation failed']);
    }

    // Zwraca widok formularza do edycji istniejącego ćwiczenia
    public function editView($id)
    {
        $exercise = Exercise::find($id);
        $parts = BodyPart::all();
        $levels = DifficultyLevel::all();
        return view('exercises.edit', compact('exercise', 'parts', 'levels'));
    }

    // Aktualizuje ćwiczenie i przekierowuje do listy
    public function updateView(Request $request, $id)
    {
        $updateExercise = $this->update($request, $id);
        $status = $updateExercise->getData()->status;
        // Sprawdź, czy aktualizacja ćwiczenia powiodła się zanim przekierujesz użytkownika
        if($status === 'success') {
            return redirect()->route('exercises.indexView');
        }
        return back()->withErrors(['message' => 'Exercise update failed']);
    }

    // Usuwa ćwiczenie i przekierowuje do listy
    public function destroyView($id)
    {
        $exercise = Exercise::find($id);
        if (!$exercise) {
            return response()->json(['status' => 'error', 'message' => 'Exercise not found']);
        }

        $exercise->delete();
        return response()->json(['status' => 'success', 'message' => 'Exercise deleted successfully']);
    }


}
