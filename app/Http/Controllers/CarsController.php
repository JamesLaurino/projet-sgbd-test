<?php

namespace App\Http\Controllers;

class CarsController extends Controller
{
    public function index()
    {
        $cars = array("Volvo", "BMW", "Mercedes");
        return view('exercice-routing.cars', ['cars' => $cars]);
    }
}
