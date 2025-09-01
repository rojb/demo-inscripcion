<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        return Grupo::with(['materia', 'docente', 'gestion', 'horarios'])->get();
    }

    public function grupoConEstudiantes()
    {
        return Grupo::with(['materia', 'docente', 'gestion', 'horarios','detallesInscripcion.inscripcion.estudiante'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'sigla' => 'required|string',
            'nombre' => 'required|string',
            'cupo' => 'required|string',
            'materia_id' => 'required|exists:materias,id',
            'docente_id' => 'required|exists:docentes,id',
            'gestion_id' => 'required|exists:gestiones,id'
        ]);

        return Grupo::create($request->all());
    }

    public function show(string $id)
    {
        return Grupo::with(['materia', 'docente', 'gestion', 'horarios',])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $grupo = Grupo::findOrFail($id);

        $request->validate([
            'sigla' => 'required|string',
            'nombre' => 'required|string',
            'cupo' => 'required|string',
            'materia_id' => 'required|exists:materias,id',
            'docente_id' => 'required|exists:docentes,id',
            'gestion_id' => 'required|exists:gestiones,id'
        ]);

        $grupo->update($request->all());
        return $grupo;
    }

    public function destroy(string $id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->delete();
        return response()->noContent();
    }
}
