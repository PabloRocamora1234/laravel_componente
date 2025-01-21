<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relación inversa 1:N
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
