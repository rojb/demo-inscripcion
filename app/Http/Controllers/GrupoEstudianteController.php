<?php

namespace App\Http\Controllers;

use App\Jobs\StoreJob;
use App\Jobs\DestroyJob;
use Illuminate\Http\Request;
use App\Models\GrupoEstudiante;
use App\Models\Job;

class GrupoEstudianteController extends Controller
{
    public function index()
    {
        
        return GrupoEstudiante::with(['estudiante', 'grupo'])->get();
    }

    public function store(Request $request)
    {
        StoreJob::dispatch(GrupoEstudiante::class, $request->all());
        return response()->json(['message' => 'Grupo Estudiante en proceso de creación'], 202);
    }

    public function show(string $id)
    {
        return GrupoEstudiante::with(['estudiante', 'grupo'])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $GrupoEstudiante = GrupoEstudiante::findOrFail($id);

        $request->validate([
            'nota' => 'nullable|numeric|min:0|max:100',
            'creditos' => 'required|integer|min:1',
            'estudiante_id' => 'required|exists:estudiantes,id',
            'grupo_id' => 'required|exists:grupos,id'
        ]);

        $GrupoEstudiante->update($request->all());
        return $GrupoEstudiante;
    }

    public function destroy(string $id)
    {
        DestroyJob::dispatch(GrupoEstudiante::class, $id);
        return response()->json(['message' => 'Grupo Estudiante en proceso de eliminación'], 202);
    }

    // Método adicional para obtener notas de un estudiante
    public function notasEstudiante(string $estudiante_id)
    {
        return GrupoEstudiante::with(['estudiante', 'grupo', 'grupo.docente', 'grupo.materia', 'grupo.gestion'])
            ->where('estudiante_id', $estudiante_id)
            ->get();
    }
}
