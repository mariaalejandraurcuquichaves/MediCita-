<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitasTestSeeder extends Seeder
{
    public function run()
    {
        // Forzar inserción solo con los IDs requeridos por la Foreign Key
        DB::statement('INSERT IGNORE INTO paciente (id_paciente) VALUES (2)');
        DB::statement('INSERT IGNORE INTO especialista (id_especialista) VALUES (2)');
    }
}