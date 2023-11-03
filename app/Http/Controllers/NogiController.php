<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NogiController extends Controller
{
    public function index()
    {
        $ćwiczenia = ["Ćwiczenie 1", "Ćwiczenie 2", "Ćwiczenie 3"];
        $losoweĆwiczenie = $ćwiczenia[array_rand($ćwiczenia)];

        return view('nogi', ['ćwiczenie' => $losoweĆwiczenie]);
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


