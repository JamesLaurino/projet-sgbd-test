<?php

namespace App\Http\Controllers;


use App\service\Weather;

class CarsController extends Controller
{


    public function __construct(){}

    public function index(Weather $weather)
    {
        echo $weather->isSunnyTomorow();
        $cars = array("Volvo", "BMW", "Mercedes");
        return view('exercice-routing.cars', ['cars' => $cars]);
    }
}
