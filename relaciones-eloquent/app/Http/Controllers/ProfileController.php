<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Obtener el perfil de un usuario por su ID
    public function getProfileByUserId($userId)
    {
        $profile = Profile::where('user_id', $userId)->firstOrFail();
        return response()->json($profile);
    }

    // Actualizar el perfil de un usuario
    public function updateProfile(Request $request, $userId)
    {
        $profile = Profile::where('user_id', $userId)->firstOrFail();
        $profile->update($request->all());
        return response()->json(['message' => 'Perfil actualizado con éxito', 'profile' => $profile]);
    }
}
