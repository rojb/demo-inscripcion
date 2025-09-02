<?php

namespace App\Http\Controllers;

use App\Jobs\GuardarFacultadJob;
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
        GuardarFacultadJob::dispatch($request->all());
        // GuardarFacultadJob::dispatch($request->all())->onQueue('principal');

        return response()->json(['message' => 'Facultad en proceso de creación'], 202);
    }

    public function update(Request $request, $id)
    {
        $facultad = Facultad::findOrFail($id);
        $facultad->update($request->all());
        return response()->json($facultad, 200);
    }

    public function destroy($id)
    {
        Facultad::destroy($id);
        return response()->json(null, 204);
    }
}
