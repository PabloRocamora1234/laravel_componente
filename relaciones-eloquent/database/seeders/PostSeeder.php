<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Primer post de John',
                'content' => 'Este es el contenido del primer post de John Doe.',
                'user_id' => 1, // ID del usuario John Doe
            ],
            [
                'title' => 'Segundo post de John',
                'content' => 'Este es el contenido del segundo post de John Doe.',
                'user_id' => 1, // ID del usuario John Doe
            ],
            [
                'title' => 'Primer post de Jane',
                'content' => 'Este es el contenido del primer post de Jane Smith.',
                'user_id' => 2, // ID del usuario Jane Smith
            ],
            [
                'title' => 'Primer post de Carlos',
                'content' => 'Este es el contenido del primer post de Carlos Pérez.',
                'user_id' => 3, // ID del usuario Carlos Pérez
            ],
        ]);
    }
}