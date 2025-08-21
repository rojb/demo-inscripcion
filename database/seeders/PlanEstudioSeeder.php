<?php

namespace Database\Seeders;

use App\Models\PlanEstudio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanEstudioSeeder extends Seeder
{
    public function run(): void
    {
        PlanEstudio::create([
            'codigo' => 1,
            'cantidad_semestres' => 10,
            'vigente' => true,
            'carrera_id' => 1
        ]);
    }
}
