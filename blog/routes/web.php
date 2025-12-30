<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Nueva ruta para posts
Route::get('/posts', function () {
    return 'Listado de posts';
});
