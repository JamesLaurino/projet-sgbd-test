<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index($name)
    {
        return view('exercice-routing.user', ['name' => $name]);
    }

    public function show()
    {
        $users = User::all();
        return view('client.user', ["users" => $users]);
    }
}
