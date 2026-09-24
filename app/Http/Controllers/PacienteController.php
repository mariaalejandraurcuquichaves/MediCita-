<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Persona;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PacienteController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:50',
            'numero_documento' => 'required|string|unique:personas,numero_documento',
            'correo' => 'required|email|unique:personas,correo',
            'celular' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date|before:today',
            'direccion' => 'required|string|max:255',
            'genero' => 'required|string|max:50',
            'nombre_usuario' => 'required|string|max:255|unique:usuarios,nombre_usuario',
            'password' => 'required|string|min:8',
        ]);

        $paciente = DB::transaction(function () use ($request) {
            $persona = Persona::create([
                'nombre' => $request->nombre,
                'tipo_documento' => $request->tipo_documento,
                'numero_documento' => $request->numero_documento,
                'correo' => $request->correo,
                'celular' => $request->celular,
            ]);

            $paciente = Paciente::create([
                'id_persona' => $persona->id,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'direccion' => $request->direccion,
                'genero' => $request->genero,
            ]);

            Usuario::create([
                'id_persona' => $persona->id,
                'id_rol' => 3,
                'nombre_usuario' => $request->nombre_usuario,
                'password' => Hash::make($request->password),
            ]);

            return $paciente;
        });

        return response()->json($paciente->load('persona'), 201);
    }
}