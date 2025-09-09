<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Jobs\StoreJob;
use App\Jobs\DestroyJob;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        return Grupo::with(['materia', 'docente', 'gestion', 'horarios'])->get();
    }

    public function grupoConEstudiantes()
    {
        return Grupo::with(['materia', 'docente', 'gestion', 'horarios', 'detallesInscripcion.inscripcion.estudiante'])->get();
    }

    public function store(Request $request)
    {
        StoreJob::dispatch(Grupo::class, $request->all());
        return response()->json(['message' => 'Grupo en proceso de creación'], 202);
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
        DestroyJob::dispatch(Grupo::class, $id);
        return response()->json(['message' => 'Grupo en proceso de eliminación'], 202);
    }
}
