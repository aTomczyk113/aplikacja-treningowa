<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlecyController extends Controller
{
    public function index()
    {
        $ćwiczenia = ["Ćwiczenie 1", "Ćwiczenie 2", "Ćwiczenie 3"];
        $losoweĆwiczenie = $ćwiczenia[array_rand($ćwiczenia)];

        return view('plecy', ['ćwiczenie' => $losoweĆwiczenie]);
    }

    public function początkujący()
    {
        // Dodaj obsługę poziomu "Początkujący"
    }

    public function średni()
    {
        // Dodaj obsługę poziomu "Średni"
    }

    public function zaawansowany()
    {
        // Dodaj obsługę poziomu "Zaawansowany"
    }
}

