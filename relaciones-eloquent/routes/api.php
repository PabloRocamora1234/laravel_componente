<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

// Rutas relacionadas con usuarios
Route::get('/user/{id}/profile', [UserController::class, 'getUserProfile']);
Route::get('/user/{id}/posts', [UserController::class, 'getUserPosts']);

// Rutas relacionadas con perfiles
Route::get('/user/{id}/profile', [ProfileController::class, 'getProfileByUserId']);
Route::put('/user/{id}/profile', [ProfileController::class, 'updateProfile']);

// Rutas relacionadas con publicaciones
Route::get('/user/{id}/posts', [PostController::class, 'getPostsByUserId']);
Route::post('/user/{id}/posts', [PostController::class, 'createPost']);
Route::delete('/posts/{id}', [PostController::class, 'deletePost']);
