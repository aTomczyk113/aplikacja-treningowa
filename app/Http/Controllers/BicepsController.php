<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BicepsController extends Controller
{
    public function index()
    {
        $ćwiczenia = ["Ćwiczenie 1", "Ćwiczenie 2", "Ćwiczenie 3"];
        $losoweĆwiczenie = $ćwiczenia[array_rand($ćwiczenia)];

        return view('biceps', ['ćwiczenie' => $losoweĆwiczenie]);
    }

    public function początkujący()
    {
        $ćwiczenia = ["Ćwiczenie 4", "Ćwiczenie 5", "Ćwiczenie 6"];
        $losoweĆwiczenie = $ćwiczenia[array_rand($ćwiczenia)];

        return view('biceps-poziom', ['ćwiczenie' => $losoweĆwiczenie, 'poziom' => 'Początkujący']);
    }

    public function średni()
    {
        $ćwiczenia = ["Ćwiczenie 7", "Ćwiczenie 8", "Ćwiczenie 9"];
        $losoweĆwiczenie = $ćwiczenia[array_rand($ćwiczenia)];

        return view('biceps-poziom', ['ćwiczenie' => $losoweĆwiczenie, 'poziom' => 'Średni']);
    }

    public function zaawansowany()
    {
        $ćwiczenia = ["Ćwiczenie 10", "Ćwiczenie 11", "Ćwiczenie 12"];
        $losoweĆwiczenie = $ćwiczenia[array_rand($ćwiczenia)];

        return view('biceps-poziom', ['ćwiczenie' => $losoweĆwiczenie, 'poziom' => 'Zaawansowany']);
    }
}
