<?php

namespace App\Http\Controllers;

class MembreController extends Controller
{
    public function index()
    {
        $membres = [
            ['prenom' => 'Alice', 'age' => 29],
            ['prenom' => 'Bob', 'age' => 34],
            ['prenom' => 'Chloé', 'age' => 17],
            ['prenom' => 'Damien', 'age' => 42],
        ];
        return view('exercice-view.membre',['membres' => $membres]);
    }
}
