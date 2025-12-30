<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::resource('posts', PostController::class)
    ->only(['index', 'show', 'create', 'edit']);
