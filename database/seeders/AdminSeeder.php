<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $persona = Persona::firstOrCreate(
            ['numero_documento' => '0000000001'],
            [
                'nombre' => 'Administrador',
                'tipo_documento' => 'CC',
                'correo' => 'admin@medicita.com',
                'celular' => '3000000000',
            ]
        );

        Usuario::firstOrCreate(
            ['nombre_usuario' => 'admin'],
            [
                'id_persona' => $persona->id,
                'id_rol' => 1,
                'password' => Hash::make(env('ADMIN_PASSWORD')),
            ]
        );
    }
}
