<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::all();
        return $roles;
    }

    public function store(Request $request)
    {
        $rol = Rol::create([
            'nombre_rol' => $request->nombre_rol,
        ]);

        return $rol;
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);

        $rol->nombre_rol = $request->nombre_rol;

        $rol->save();

        return $rol;
    }

    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);

        $rol->delete();

        return response()->json(['mensaje' => 'Rol eliminado correctamente']);
    }
}
