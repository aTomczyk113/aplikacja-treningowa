<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

        // Top performers query
        $topPerformers = User::withCount('completed_exercises')
            ->orderBy('completed_exercises_count', 'desc')
            ->take(10)
            ->get();

        return view('home', ['exerciseCount' => $exerciseCount, 'topPerformers' => $topPerformers]);
    }
}

