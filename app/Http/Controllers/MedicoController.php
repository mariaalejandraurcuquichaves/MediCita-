<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Persona;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class MedicoController extends Controller
{
    public function index()
    {
        return Medico::with('especialidad', 'persona')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|string|max:255',
            'tipo_documento' => 'required|string|max:50',
            'numero_documento' => 'required|string|unique:personas,numero_documento',
            'correo' => 'required|email|unique:personas,correo',
            'celular' => 'required|string|max:20',
            'tarjeta_profesional' => 'required|string|max:255',
            'id_especialidad' => 'required|exists:especialidades,id',
            'nombre_usuario' => 'required|string|max:255|unique:usuarios,nombre_usuario',
            'password' => 'required|string|min:8',
        ]);

        $medico = DB::transaction(function () use ($request){
            $persona = Persona::create([
                'nombre' => $request->nombre,
                'tipo_documento' => $request->tipo_documento,
                'numero_documento' => $request->numero_documento,
                'correo' => $request->correo,
                'celular' => $request->celular,
            ]);

            $medico = Medico::create([
                'id_persona' => $persona->id,
                'tarjeta_profesional' => $request->tarjeta_profesional,
                'id_especialidad' => $request->id_especialidad,
            ]);

            Usuario::create([
                'id_persona' => $persona->id,
                'id_rol' => 2,
                'nombre_usuario' => $request->nombre_usuario,
                'password' => Hash::make($request->password),
            ]);

            return $medico;

        });

        return response()->json($medico->load(['persona', 'especialidad']), 201);
    }
}
