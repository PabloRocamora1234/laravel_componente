<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function getUserProfile($id)
    {
        $user = User::with('profile')->findOrFail($id);
        return response()->json($user);
    }

    
    public function getUserPosts($id)
    {
        $user = User::with('posts')->findOrFail($id);
        return response()->json($user);
    }
}

