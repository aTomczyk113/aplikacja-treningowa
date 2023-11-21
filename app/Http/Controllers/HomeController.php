<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user(); // dostęp do aktualnie zalogowanego użytkownika
        $exerciseCount = $user->completed_exercises()->count();

        return view('home', ['exerciseCount' => $exerciseCount]);
    }
}
