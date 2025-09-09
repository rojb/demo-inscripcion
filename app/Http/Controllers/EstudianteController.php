<?php

namespace App\Http\Controllers;

use App\Jobs\StoreJob;
use App\Jobs\UpdateJob;
use App\Jobs\DestroyJob;
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

        StoreJob::dispatch(Estudiante::class, $request->all());
        return response()->json(['message' => 'Estudiante en proceso de creación'], 202);
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

         UpdateJob::dispatch(Estudiante::class, $id, $request->all());
        return response()->json(['message' => 'Estudiante en proceso de actualización'], 202);
    }

    public function destroy(string $id)
    {
        DestroyJob::dispatch(Estudiante::class, $id);
        return response()->json(['message' => 'Estudiante en proceso de eliminación'], 202);
    }
}
