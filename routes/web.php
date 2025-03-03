<?php

use App\Models\Cerveza;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/cervezas', function () {
    $cervezas = Cerveza::all(); // Obtener todas las cervezas de la base de datos
    return view('cervezas', compact('cervezas'));
});
