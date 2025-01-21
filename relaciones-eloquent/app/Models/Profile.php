<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Relación inversa 1:1
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

