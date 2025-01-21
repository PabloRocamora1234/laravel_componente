<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

// Ruta raíz
Route::get('/', function () {
    return view('welcome');
});

// Rutas relacionadas con usuarios
Route::get('/user/{id}/profile', [ProfileController::class, 'getProfileByUserId']); // Usar ProfileController
Route::get('/user/{id}/posts', [PostController::class, 'getPostsByUserId']); // Esto está bien

// Rutas relacionadas con perfiles
Route::put('/user/{id}/profile', [ProfileController::class, 'updateProfile']);

// Rutas relacionadas con publicaciones
Route::get('/user/{id}/posts', [PostController::class, 'getPostsByUserId']);
Route::post('/user/{id}/posts', [PostController::class, 'createPost']);
Route::delete('/posts/{id}', [PostController::class, 'deletePost']);