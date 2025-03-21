<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index($name)
    {
        return view('user', ['name' => $name]);
    }
}
