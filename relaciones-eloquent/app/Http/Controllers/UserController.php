<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Obtener perfil de un usuario (1:1)
    public function getUserProfile($id)
    {
        $user = User::with('profile')->findOrFail($id);
        return response()->json($user);
    }

    // Obtener publicaciones de un usuario (1:N)
    public function getUserPosts($id)
    {
        $user = User::with('posts')->findOrFail($id);
        return response()->json($user);
    }
}

