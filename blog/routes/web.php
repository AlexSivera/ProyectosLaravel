<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// RUTAS TEMPORALES DE PRUEBA (DEBEN IR ANTES DEL RESOURCE)
Route::get('posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])
    ->name('posts.nuevoPrueba');

Route::get('posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])
    ->name('posts.editarPrueba');

// Rutas para posts (resource)
Route::resource('posts', PostController::class);
