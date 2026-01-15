<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('inicio.inicio');
})->name('inicio');



Route::get('/posts/nuevaPrueba', [PostController::class, 'nuevaPrueba']);
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba']);

Route::resource('posts', PostController::class)
->only(['index', 'show', 'create', 'edit', 'destroy']);