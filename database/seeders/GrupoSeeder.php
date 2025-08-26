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
            ['sigla' => 'FIS100', 'nombre' => 'FISICA 1', 'cupo' => 40, 'materia_id' => 1, 'docente_id' => 1, 'gestion_id' => 5],
            ['sigla' => 'INF110', 'nombre' => 'INTRODUCCIÓN A LA INFORMATICA', 'cupo' => 35, 'materia_id' => 2, 'docente_id' => 2, 'gestion_id' => 5],
            ['sigla' => 'INF119', 'nombre' => 'ESTRUCTURAS DISCRETAS', 'cupo' => 38, 'materia_id' => 3, 'docente_id' => 3, 'gestion_id' => 5],
            ['sigla' => 'LIN100', 'nombre' => 'INGLÉS TECNICO 1', 'cupo' => 30, 'materia_id' => 4, 'docente_id' => 4, 'gestion_id' => 5],
            ['sigla' => 'MAT101', 'nombre' => 'CALCULO 1', 'cupo' => 42, 'materia_id' => 5, 'docente_id' => 5, 'gestion_id' => 5],

            // Grupos para materias del segundo semestre
            ['sigla' => 'FIS102', 'nombre' => 'FISICA 2', 'cupo' => 35, 'materia_id' => 6, 'docente_id' => 1, 'gestion_id' => 5],
            ['sigla' => 'INF120', 'nombre' => 'PROGRAMACIÓN 1', 'cupo' => 25, 'materia_id' => 7, 'docente_id' => 2, 'gestion_id' => 5],
            ['sigla' => 'LIN101', 'nombre' => 'INGLÉS TECNICO 2', 'cupo' => 30, 'materia_id' => 8, 'docente_id' => 4, 'gestion_id' => 5],
        ];

        foreach ($grupos as $grupo) {
            Grupo::create($grupo);
        }
    }
}
