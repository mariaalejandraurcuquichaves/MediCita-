<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;


class EspecialidadController extends Controller
{
    public function index()
    {
        return Especialidad::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $especialidad = Especialidad::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json($especialidad, 201);
    }
}
