<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index()
    {
        return Inscripcion::with([
            'estudiante',
            'gestion',
            'detalle',
            'detalle.grupo',
            'detalle.grupo.materia',
            'detalle.grupo.docente',
            'detalle.grupo.horarios',
            'detalle.grupo.horarios.modulo',
            'detalle.grupo.horarios.aula',
        ])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'estudiante_id' => 'required|exists:estudiantes,id',
            'gestion_id' => 'required|exists:gestiones,id'
        ]);

        return Inscripcion::create($request->all());
    }

    public function show(string $id)
    {
        return Inscripcion::with([
            'estudiante',
            'gestion',
            'detalle',
            'detalle.grupo',
            'detalle.grupo.materia',
            'detalle.grupo.docente',
            'detalle.grupo.horarios',
            'detalle.grupo.horarios.modulo',
            'detalle.grupo.horarios.aula',
        ])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $inscripcion = Inscripcion::findOrFail($id);

        $request->validate([
            'fecha' => 'required|date',
            'estudiante_id' => 'required|exists:estudiantes,id',
            'gestion_id' => 'required|exists:gestiones,id'
        ]);

        $inscripcion->update($request->all());
        return $inscripcion;
    }

    public function destroy(string $id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->delete();
        return response()->noContent();
    }
}
