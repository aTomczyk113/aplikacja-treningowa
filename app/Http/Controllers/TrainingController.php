<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return view('treningi'); // Wyświetlenie widoku treningi.blade.php
    }
    public function klatka()
    {
        // Tu umieść kod dla treningu klatki
        return view('klatka_trening');
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
}
