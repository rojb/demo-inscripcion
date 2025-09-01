<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
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
}
