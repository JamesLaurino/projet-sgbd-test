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
        $credential = $loginRequest->validated();

        if(Auth::attempt($credential)) {
            $loginRequest->session()->regenerate();
            return redirect()->route("accueil.index");
        }

        return to_route('client.login')->withErrors([
            "email" => "connexion invalide"
        ])->onlyInput("email");
    }

    public function logout()
    {
        Auth::logout();
        return view('client.login');
    }

}
