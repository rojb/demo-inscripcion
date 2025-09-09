<?php

namespace App\Http\Controllers;

use App\Jobs\DestroyJob;
use Illuminate\Http\Request;
use App\Models\MateriaEstudiante;

class MateriaEstudianteController extends Controller
{
    public function index()
    {
        return MateriaEstudiante::with(['materia', 'estudiante', 'grupo'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nota' => 'nullable|numeric|min:0|max:100',
            'creditos' => 'required|integer|min:1',
            'materia_id' => 'required|exists:materias,id',
            'estudiante_id' => 'required|exists:estudiantes,id',
            'grupo_id' => 'required|exists:grupos,id'
        ]);

        return MateriaEstudiante::create($request->all());
    }

    public function show(string $id)
    {
        return MateriaEstudiante::with(['materia', 'estudiante', 'grupo'])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $materiaEstudiante = MateriaEstudiante::findOrFail($id);

        $request->validate([
            'nota' => 'nullable|numeric|min:0|max:100',
            'creditos' => 'required|integer|min:1',
            'materia_id' => 'required|exists:materias,id',
            'estudiante_id' => 'required|exists:estudiantes,id',
            'grupo_id' => 'required|exists:grupos,id'
        ]);

        $materiaEstudiante->update($request->all());
        return $materiaEstudiante;
    }

    public function destroy(string $id)
    {
        DestroyJob::dispatch(MateriaEstudiante::class, $id);
        return response()->json(['message' => 'Materia Estudiante en proceso de eliminación'], 202);
    }

    // Método adicional para obtener notas de un estudiante
    public function notasEstudiante(string $estudiante_id)
    {
        return MateriaEstudiante::with(['materia', 'grupo'])
            ->where('estudiante_id', $estudiante_id)
            ->get();
    }

    // Método adicional para obtener estudiantes de una materia
    public function estudiantesMateria(string $materia_id)
    {
        return MateriaEstudiante::with(['estudiante', 'grupo'])
            ->where('materia_id', $materia_id)
            ->get();
    }
}
