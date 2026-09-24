<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
     public function index()
    {
        return Cita::with(['paciente.persona', 'medico.persona', 'medico.especialidad'])->get();
    }

     public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'required|string|max:255',
            'id_paciente' => 'required|exists:pacientes,id',
            'id_medico' => 'required|exists:medicos,id',
        ]);

        $ocupada = Cita::where('id_medico', $request->id_medico)
            ->where('fecha', $request->fecha)
            ->where('hora', $request->hora)
            ->exists();

        if ($ocupada) {
            return response()->json([
                'message' => 'Ese médico ya tiene una cita a esa fecha y hora.'
            ], 422);
        }

        $cita = Cita::create([
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'motivo' => $request->motivo,
            'id_paciente' => $request->id_paciente,
            'id_medico' => $request->id_medico,
        ]);

        return response()->json($cita, 201);
    }
}
