<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [
            ['titre' => 'Marketing', 'message' => 29],
            ['titre' => 'Info', 'message' => 29],
            ['titre' => 'Web', 'message' => 29]
        ];
        return view('exercice-view.service', ['data' => $data]);
    }
}
