<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    // Nombre exacto de la tabla en phpMyAdmin
    protected $table = 'cita';

    // Nombre de la clave primaria
    protected $primaryKey = 'id_cita';

    // Desactivar timestamps si tu tabla no tiene columnas created_at y updated_at
    public $timestamps = false;

    // Campos que se pueden insertar desde el formulario
    protected $fillable = [
        'fecha',
        'hora',
        'estado',
        'id_paciente',
        'id_especialista',
    ];
}