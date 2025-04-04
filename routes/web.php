<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\CategoryController;

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

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/membres', [MembreController::class, 'index'])->name('membre.index');

Route::get('/services', [ServiceController::class, 'index'])->name('service.index');

Route::get('/produits', [ProduitController::class, 'index'])->name('produit.index');

Route::get('/produits/{id}', [ProduitController::class, 'getById'])->name('produit.index');


/***************************** EXERCICE : DB ***************************/

Route::prefix("/task")->name("task.")->controller(TaskController::class)->group(function(){

    Route::get('/', 'index')->name('index');

    Route::get('/add','form')->name('add');

    Route::get('/delete/{id}', 'delete')->name('delete');

    Route::get('/{id}', 'getById')->name('show');

    Route::post('/', 'add')->name('store');
});


Route::prefix("/category")->name("category.")->controller(CategoryController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'getById')->name('show');
});

/******************************* EXERCICE : STORAGE *****************************/


Route::get("/upload", [UploadController::class,"index"])
    ->name("upload.index");

Route::post("/upload", [UploadController::class,"create"])
    ->name("upload.create");


/****************************** EXERCICE : AUTHENTICATION **********************/


Route::get("/users/create", [UserController::class, 'create'])->name("user.create");

Route::get("/users", [UserController::class, 'show'])->name("user.show")
    ->middleware("auth");
Route::get("/login", [LoginController::class, "index"])->name("auth.login");
Route::post("/login", [LoginController::class, "connect"])->name("auth.login");
Route::post("/logout", [LoginController::class, "logout"])->name("auth.logout");
