<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Jobs\DestroyJob;
use App\Models\PlanEstudio;
use Illuminate\Http\Request;

class PlanEstudioController extends Controller
{
    //Materias del ultimo plan de estudio de la {carrera}
    public function getMaterias(String $carrera)
    {
        $carrera = Carrera::where('nombre', $carrera)->first();

        $ultimoPlan = $carrera->planesEstudio()->orderBy('created_at', 'desc')->first();
        $materias = $ultimoPlan->materias;
        return $materias;
    }

    public function destroy(string $id)
    {
        DestroyJob::dispatch(PlanEstudio::class, $id);
        return response()->json(['message' => 'Modulo en proceso de eliminación'], 202);
    }
}
