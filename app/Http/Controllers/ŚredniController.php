<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ŚredniController extends Controller
{
    public function index()
    {
        $poziomy = ["Ćwiczenia na poziomie średnim 1", "Ćwiczenia na poziomie średnim 2", "Ćwiczenia na poziomie średnim 3"];
        $losowyPoziom = $poziomy[array_rand($poziomy)];

        return view('średni', ['poziom' => $losowyPoziom]);
    }
}

