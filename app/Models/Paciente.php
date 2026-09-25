<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = ['id_persona', 'fecha_nacimiento', 'direccion', 'genero'];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }
}
