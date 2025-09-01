<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    public function run(): void
    {
        $grupos = [
            // Grupos para materias del primer semestre
            ['sigla' => 'SA', 'cupo' => 40, 'materia_id' => 1, 'docente_id' => 1, 'gestion_id' => 5],
            ['sigla' => 'SB', 'cupo' => 35, 'materia_id' => 2, 'docente_id' => 2, 'gestion_id' => 5],
            ['sigla' => 'SA', 'cupo' => 38, 'materia_id' => 3, 'docente_id' => 3, 'gestion_id' => 5],
            ['sigla' => 'SC', 'cupo' => 30, 'materia_id' => 4, 'docente_id' => 4, 'gestion_id' => 5],
            ['sigla' => 'Z1', 'cupo' => 42, 'materia_id' => 5, 'docente_id' => 5, 'gestion_id' => 5],

            // Grupos para materias del segundo semestre
            ['sigla' => 'SA', 'cupo' => 35, 'materia_id' => 6, 'docente_id' => 1, 'gestion_id' => 5],
            ['sigla' => 'SB', 'cupo' => 25, 'materia_id' => 7, 'docente_id' => 2, 'gestion_id' => 5],
            ['sigla' => 'SC', 'cupo' => 30, 'materia_id' => 8, 'docente_id' => 4, 'gestion_id' => 5],
        ];

        foreach ($grupos as $grupo) {
            Grupo::create($grupo);
        }
    }
}
