<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/posts', function () {
    return "Listado de posts";
})->name('posts_listado');

Route::get('/posts/{id}', function ($id) {
    return "Ficha del post $id";
})->where('id', '[0-9]+') ->name('posts_ficha');

Route::get('/plantilla', function () {
    return view('plantilla');
});
