<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            [
                'bio' => 'Este es el perfil de John Doe.',
                'user_id' => 1, // ID del usuario John Doe
            ],
            [
                'bio' => 'Este es el perfil de Jane Smith.',
                'user_id' => 2, // ID del usuario Jane Smith
            ],
            [
                'bio' => 'Este es el perfil de Carlos Pérez.',
                'user_id' => 3, // ID del usuario Carlos Pérez
            ],
        ]);
    }
}