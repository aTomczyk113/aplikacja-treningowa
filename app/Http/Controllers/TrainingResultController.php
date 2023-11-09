<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingResultController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'result' => 'required',
            'date' => 'required',
            // Dodaj inne walidacje
        ]);

        $user = auth()->user(); // Jeśli chcesz przypisać wynik do zalogowanego użytkownika

        $trainingResult = new TrainingResult($data);
        $trainingResult->user_id = $user->id; // Przypisanie użytkownika
        $trainingResult->save();

        return response()->json(['message' => 'Wynik treningu został zapisany.']);
    }

}
