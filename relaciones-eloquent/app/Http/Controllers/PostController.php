<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Obtener todos los posts de un usuario por su ID
    public function getPostsByUserId($userId)
    {
        $posts = Post::where('user_id', $userId)->get();
        return response()->json($posts);
    }

    // Crear un nuevo post para un usuario
    public function createPost(Request $request, $userId)
    {
        $post = new Post();
        $post->user_id = $userId;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return response()->json(['message' => 'Post creado con éxito', 'post' => $post]);
    }

    // Eliminar un post por su ID
    public function deletePost($postId)
    {
        $post = Post::findOrFail($postId);
        $post->delete();

        return response()->json(['message' => 'Post eliminado con éxito']);
    }
}

