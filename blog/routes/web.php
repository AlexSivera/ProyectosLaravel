<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Ruta de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Rutas de posts usando resource
Route::resource('posts', PostController::class)
    ->only(['index', 'show', 'create', 'edit']);
