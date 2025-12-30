<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');


// Ruta para posts
Route::get('/posts', function () {
    return 'Listado de posts';
})->name('posts_listado');

// Ruta para ficha de post (Ejercicio 1)
Route::get('/posts/{id}', function ($id) {
    return "Ficha del post $id";
})->where('id', '[0-9]+')->name('posts_ficha');