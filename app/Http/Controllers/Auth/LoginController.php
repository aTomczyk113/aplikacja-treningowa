<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {

        $lastLogin = $request->session()->get('last_login', null);


        $now = now();

        if (!$lastLogin) {

            $trainingCount = $request->session()->get('training_count', 0);
            $request->session()->put('training_count', $trainingCount + 1);
        } else {

            $lastLogin = \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $lastLogin);


            $sessionLifetime = config('session.lifetime');


            if ($now->diffInMinutes($lastLogin) > $sessionLifetime) {
                $trainingCount = $request->session()->get('training_count', 0);
                $request->session()->put('training_count', $trainingCount + 1);
            }
        }


        $request->session()->put('last_login', $now->format('Y-m-d H:i:s'));
    }
}
