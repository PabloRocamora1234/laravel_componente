<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Relación 1:1
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // Relación 1:N
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
