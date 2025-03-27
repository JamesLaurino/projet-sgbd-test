<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('client.login');
    }

    public function connect(LoginRequest $loginRequest)
    {
        echo 'ok 1';
        $credential = $loginRequest->validated();

        if(Auth::attempt($credential)) {
            echo 'ok 2';
            $loginRequest->session()->regenerate();
            return redirect()->route("accueil.index");
        }

        echo 'ok 3';
        return to_route('auth.login')->withErrors([
            "email" => "connexion invalide"
        ])->onlyInput("email");
    }

    public function logout()
    {
        echo "logout";
        Auth::logout();
        return redirect()->route("accueil.index");
    }

}
