<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    // 1. Carga la vista del Dashboard enviándole las citas guardadas
    public function index()
    {
        $citas = Cita::all(); // Obtiene todas las citas de la BD
        return view('dashboard', compact('citas')); // Retorna tu vista dashboard.blade.php
    }

    // 2. Muestra el formulario de agendamiento
    public function create()
    {
        $pacientes = DB::table('paciente')->get();
        $especialistas = DB::table('especialista')->get();

        return view('citas', compact('pacientes', 'especialistas'));
    }

    // 3. Procesa el formulario, guarda en BD y REDIRIGE AL DASHBOARD
    public function store(Request $request)
    {
        $request->validate([
            'fecha'           => 'required|date',
            'hora'            => 'required',
            'id_paciente'     => 'required|integer',
            'id_especialista' => 'required|integer',
        ]);

        Cita::create([
            'fecha'           => $request->fecha,
            'hora'            => $request->hora,
            'estado'          => $request->estado ?? 'pendiente',
            'id_paciente'     => $request->id_paciente,
            'id_especialista' => $request->id_especialista,
        ]);

        // Redirige al dashboard ejecutando el método index()
        return redirect()->route('citas.index')->with('success', '¡Cita registrada con éxito!');
    }
}