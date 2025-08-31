<?php

namespace Database\Seeders;

use App\Models\PlanEstudio;
use Illuminate\Database\Seeder;

class PlanEstudioSeeder extends Seeder
{
    public function run(): void
    {
        //Plan estudio informatica
        PlanEstudio::create([
            'codigo' => 1,
            'cantidad_semestres' => 10,
            'vigente' => true,
            'carrera_id' => 1
        ]);

        //Plan estudio sistemas
        PlanEstudio::create([
            'codigo' => 2,
            'cantidad_semestres' => 10,
            'vigente' => true,
            'carrera_id' => 2
        ]);

        //Plan redes
        PlanEstudio::create([
            'codigo' => 3,
            'cantidad_semestres' => 10,
            'vigente' => true,
            'carrera_id' => 3
        ]);

        //Plan psicologia
        PlanEstudio::create([
            'codigo' => 4,
            'cantidad_semestres' => 8,
            'vigente' => true,
            'carrera_id' => 4
        ]);
    }
}
