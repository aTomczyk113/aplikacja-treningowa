<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $exerciseCount = $user->completed_exercises()->count();

        return view('profiles.show', ['user' => $user, 'exerciseCount' => $exerciseCount]);
    }
}
