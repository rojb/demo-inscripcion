<?php

namespace App\Http\Controllers;

use App\Jobs\StoreJob;
use App\Jobs\DestroyJob;
use Illuminate\Http\Request;
use App\Models\DetalleInscripcion;
use App\Models\Job;

class DetalleInscripcionController extends Controller
{
    public function index()
    {
        return DetalleInscripcion::with(['grupo', 'inscripcion'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'inscripcion_id' => 'required|exists:inscripciones,id',
            'grupo_id' => 'required|exists:grupos,id'
        ]);

        $job = Job::create(['queue' => 'default']);
        StoreJob::dispatch(DetalleInscripcion::class, $request->all());
        return response()->json(['transaccionId' => $job->id(), 'message' => 'Grupo en proceso de creación'], 202);
    }

    public function show(string $id)
    {
        return DetalleInscripcion::with(['grupo', 'inscripcion'])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $inscripcion = DetalleInscripcion::findOrFail($id);

        $request->validate([
            'fecha' => 'required|date',
            'inscripcion_id' => 'required|exists:inscripciones,id',
            'grupo_id' => 'required|exists:grupos,id'
        ]);

        $inscripcion->update($request->all());
        return $inscripcion;
    }

    public function destroy(string $id)
    {
        DestroyJob::dispatch(DetalleInscripcion::class, $id);
        return response()->json(['message' => 'Detalle Inscripción en proceso de eliminación'], 202);
    }
}
