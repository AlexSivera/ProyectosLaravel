<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');


// Ruta para posts
Route::get('/posts', function () {
    return view('posts.listado');
})->name('posts_listado');

// Ruta para ficha de post (Ejercicio 1)
Route::get('/posts/{id}', function ($id) {
    return view('posts.ficha', compact('id'));
})->where('id', '[0-9]+')->name('posts_ficha');
