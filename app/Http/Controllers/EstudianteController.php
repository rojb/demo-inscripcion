<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        return Estudiante::with(['inscripciones', 'materias', 'grupos'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'registro' => 'required|string|unique:estudiantes',
            'nombre' => 'required|string',
            'email' => 'nullable|email|unique:estudiantes',
            'telefono' => 'nullable|string'
        ]);

        return Estudiante::create($request->all());
    }

    public function show(string $id)
    {
        return Estudiante::with(['inscripciones', 'materias', 'grupos'])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::findOrFail($id);

        $request->validate([
            'registro' => 'required|string|unique:estudiantes,registro,' . $id,
            'nombre' => 'required|string',
            'email' => 'nullable|email|unique:estudiantes,email,' . $id,
            'telefono' => 'nullable|string'
        ]);

        $estudiante->update($request->all());
        return $estudiante;
    }

    public function destroy(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return response()->noContent();
    }
}
