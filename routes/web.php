<?php

use App\Http\Controllers\CalculController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');

Route::get('/hello', function () {
    return "Hello World! C'est ma première route Laravel.";
})->name('hello');


Route::get('/cars', [CarsController::class, 'index'])->name('cars.index');

Route::get('/user/{name}', [UserController::class, 'index'])->name('user.index');

Route::get('/calcul/{nombre1}/{nombre2}', [CalculController::class, 'index'])->name('calcul.index');

Route::get('/bienvenue/{langue}', [LanguageController::class, 'index'])->name('language.index');

Route::post('/formulaire', function () {
    return <<<EOT
        <form method="POST" action="/formulaire">
            <input type="text" name="nom" id="nom">
            <button type="submit">Envoyer</button>
        </form>
    EOT;
})->name('formulaire');


Route::redirect('/ici',"/hello");
