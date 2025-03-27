<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $entreprise = ['name' => 'IBM', 'creationDate' => 1956, 'mission' => "I.T"];
        return view('exercice-view.about',['entreprise' => $entreprise]);
    }
}
