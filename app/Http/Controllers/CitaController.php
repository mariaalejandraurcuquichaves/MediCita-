<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    // Mostrar la vista del formulario
    public function create()
    {
        return view('citas'); // Nombre de tu archivo citas.blade.php
    }

    // Guardar los datos del formulario en la BD
    public function store(Request $request)
    {
        // Validar que los datos requeridos lleguen bien
        $request->validate([
            'fecha'           => 'required|date',
            'hora'            => 'required',
            'id_paciente'     => 'required|integer',
            'id_especialista' => 'required|integer',
        ]);

        // Insertar en la base de datos
        Cita::create([
            'fecha'           => $request->fecha,
            'hora'            => $request->hora,
            'estado'          => $request->estado ?? 'pendiente',
            'id_paciente'     => $request->id_paciente,
            'id_especialista' => $request->id_especialista,
        ]);

        return redirect()->back()->with('success', '¡Cita registrada con éxito!');
    }
}