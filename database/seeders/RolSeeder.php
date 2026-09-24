<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['nombre_rol' => 'Administrador'],
            ['nombre_rol' => 'Medico'],
            ['nombre_rol' => 'Paciente'],
        ]);
    }
}
