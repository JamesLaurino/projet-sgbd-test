<?php

namespace App\service;

class Weather
{

    public function __construct(string $apiKey){}

    public function isSunnyTomorow() {
        return true;
    }
}
