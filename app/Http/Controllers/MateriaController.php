<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{

    public function obtenerMateriasUltimoPlan(Carrera $carrera)
    {
        $ultimoPlan = $carrera->planesEstudio()->orderBy('created_at', 'desc')->first();
        $materias = $ultimoPlan->materias;
        return $materias;
    }


    public function index()
    {
        return Materia::with(['nivel', 'tipo', 'prerequisitos', 'esPrerequisitoDe', 'materiaPlanes'])->get();
    }

    public function store(Request $request)
    {
        return Materia::create($request->all());
    }

    public function show(string $id)
    {
        return Materia::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $materia = Materia::findOrFail($id);
        $materia->update($request->all());
        return $materia;
    }

    public function destroy(string $id)
    {
        $materia = Materia::findOrFail($id);
        $materia->delete();
        return response()->noContent();
    }
}
