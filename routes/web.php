<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;

/***************************** EXERCICE : ROUTING ***************************/

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

/***************************** EXERCICE : VIEWS ***************************/

Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil.index');

Route::get('/a-propo', [AboutController::class, 'index'])->name('about.index');

Route::get('/membres', [MembreController::class, 'index'])->name('membre.index');

Route::get('/services', [ServiceController::class, 'index'])->name('service.index');

Route::get('/produits', [ProduitController::class, 'index'])->name('produit.index');

Route::get('/produits/{id}', [ProduitController::class, 'getById'])->name('produit.index');


/***************************** EXERCICE : DB ***************************/

Route::get('/tasks', [TaskController::class,'index'])->name('task.index');
Route::get('/task/{id}', [TaskController::class,'getById'])->name('task.getById');

