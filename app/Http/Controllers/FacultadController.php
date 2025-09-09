<?php

namespace App\Http\Controllers;

use App\Jobs\StoreJob;
use App\Jobs\UpdateJob;
use App\Jobs\DestroyJob;
use App\Models\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function index()
    {
        return Facultad::with('carreras')->get();
    }

    public function show($id)
    {
        return Facultad::with('carreras')->findOrFail($id);
    }

    public function store(Request $request)
    {
        // GuardarFacultadJob::dispatch($request->all());
        // GuardarFacultadJob::dispatch($request->all())->onQueue('principal');

        StoreJob::dispatch(Facultad::class, $request->all());

        return response()->json(['message' => 'Facultad en proceso de creación'], 202);
    }

    public function update(Request $request, $id)
    {

        // CrudJob::dispatch(new Facultad(), UpdateAction::class, $request->all(), $id);
        // CrudJob::dispatch(Facultad::class, 'update', $request->all(), $id);

        UpdateJob::dispatch(Facultad::class, $id, $request->all());
        return response()->json(['message' => 'Carrera en proceso de actualización'], 202);
    }

    public function destroy($id)
    {
        DestroyJob::dispatch(Facultad::class, $id);
        return response()->json(['message' => 'Facultad en proceso de eliminación'], 202);
    }
}
