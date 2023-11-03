<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoczątkującyController extends Controller
{
    public function index()
    {
        $poziomy = ["Ćwiczenia na poziomie początkującym 1", "Ćwiczenia na poziomie początkującym 2", "Ćwiczenia na poziomie początkującym 3"];
        $losowyPoziom = $poziomy[array_rand($poziomy)];

        return view('początkujący', ['poziom' => $losowyPoziom]);
    }
}
