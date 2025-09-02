<?php

namespace App\Http\Controllers;

use App\Jobs\StoreJob;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        return Carrera::with('planesEstudio.materiaPlanes.materia')->paginate(1);
    }

    public function show($id)
    {
        return Carrera::with('planesEstudio.materiaPlanes.materia')->findOrFail($id);
    }

    public function store(Request $request)
    {
        // $carrera = Carrera::create($request->all());
        // return response()->json($carrera, 201);

        StoreJob::dispatch(Carrera::class, $request->all());
        return response()->json(['message' => 'Carrera en proceso de creación'], 202);
    }

    public function update(Request $request, $id)
    {
        $carrera = Carrera::findOrFail($id);
        $carrera->update($request->all());
        return response()->json($carrera, 200);
    }

    public function destroy($id)
    {
        Carrera::destroy($id);
        return response()->json(null, 204);
    }
}
