<?php

use App\Models\Cerveza;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CervezaController;
use Illuminate\Support\Facades\Auth;

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});


Route::get('/cervezas', function () {
    $cervezas = Cerveza::all(); // Obtener todas las cervezas de la base de datos
    return view('cervezas', compact('cervezas'));
});




Route::get('/cervezas/create', [CervezaController::class, 'create'])->name('cervezas.create');
Route::post('/cervezas', [CervezaController::class, 'store'])->name('cervezas.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
