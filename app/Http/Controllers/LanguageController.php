<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    public function index($langue = null)
    {
        $langueRes = match($langue) {
            'en' => 'Welcome!',
            'es' => 'Bienvenido',
            null => 'Bienvenue',
            default => 'Langue non disponible'
        };
        return view('langue', ['langueRes' => $langueRes]);
    }
}
