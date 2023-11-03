<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZaawansowanyController extends Controller
{
    public function index()
    {
        $poziomy = ["Ćwiczenia na poziomie zaawansowanym 1", "Ćwiczenia na poziomie zaawansowanym 2", "Ćwiczenia na poziomie zaawansowanym 3"];
        $losowyPoziom = $poziomy[array_rand($poziomy)];

        return view('zaawansowany', ['poziom' => $losowyPoziom]);
    }
}
