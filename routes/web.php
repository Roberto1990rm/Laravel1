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
    return view('cervezas.index', compact('cervezas'));
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/cervezas', [CervezaController::class, 'index'])->name('cervezas');

Route::get('/cervezas/create', [CervezaController::class, 'create'])->name('cervezas.create');
Route::post('/cervezas', [CervezaController::class, 'store'])->name('cervezas.store');
Route::delete('/cervezas/{id}', [CervezaController::class, 'destroy'])->name('cervezas.destroy');
Route::get('/cervezas/{id}/edit', [CervezaController::class, 'edit'])->name('cervezas.edit');
Route::put('cervezas/{id}', [CervezaController::class, 'update'])->name('cervezas.update');
Route::get('/cervezas/{id}', [CervezaController::class, 'show'])->name('cervezas.show');



Auth::routes();
