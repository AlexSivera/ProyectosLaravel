<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Rutas de autenticación
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// RUTAS TEMPORALES DE PRUEBA (DEBEN IR ANTES DEL RESOURCE)
Route::get('posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])
    ->name('posts.nuevoPrueba');

Route::get('posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])
    ->name('posts.editarPrueba');

// Rutas para posts protegidas (create, store, edit, update, destroy)
// Se registran antes de la ruta con parámetro para evitar que "create" sea interpretado como {post}
Route::middleware(['auth'])->group(function () {
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// Rutas para posts (resource) - index y show sin protección
Route::resource('posts', PostController::class)->only(['index', 'show']);
