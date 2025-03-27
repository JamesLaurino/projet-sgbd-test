<?php

namespace App\Http\Controllers;

class CalculController extends Controller
{
    public function index($nombre1, $nombre2)
    {
        $sum = $nombre1 + $nombre2;
        return view('exercice-routing.calcul', ['sum' => $sum]);
    }
}
