<?php

namespace Database\Seeders;

use App\Models\MateriaEstudiante;
use Illuminate\Database\Seeder;

class MateriaEstudianteSeeder extends Seeder
{
    public function run(): void
    {
        $materiaEstudiantes = [
            // Estudiante 1 cursando primer semestre
            ['nota' => 85.5, 'creditos' => 5, 'materia_id' => 1, 'estudiante_id' => 1, 'grupo_id' => 1],
            ['nota' => 92.0, 'creditos' => 5, 'materia_id' => 2, 'estudiante_id' => 1, 'grupo_id' => 2],
            ['nota' => 78.5, 'creditos' => 5, 'materia_id' => 3, 'estudiante_id' => 1, 'grupo_id' => 3],

            // Estudiante 2 cursando primer semestre
            ['nota' => 88.0, 'creditos' => 5, 'materia_id' => 1, 'estudiante_id' => 2, 'grupo_id' => 1],
            ['nota' => 95.5, 'creditos' => 5, 'materia_id' => 2, 'estudiante_id' => 2, 'grupo_id' => 2],
            ['nota' => 82.0, 'creditos' => 5, 'materia_id' => 4, 'estudiante_id' => 2, 'grupo_id' => 4],

            // Estudiante 3 cursando segundo semestre (ya aprobó primero)
            ['nota' => 90.0, 'creditos' => 5, 'materia_id' => 6, 'estudiante_id' => 3, 'grupo_id' => 6],
            ['nota' => 87.5, 'creditos' => 5, 'materia_id' => 7, 'estudiante_id' => 3, 'grupo_id' => 7],
            ['nota' => 91.0, 'creditos' => 5, 'materia_id' => 8, 'estudiante_id' => 3, 'grupo_id' => 8],
        ];

        foreach ($materiaEstudiantes as $materiaEstudiante) {
            MateriaEstudiante::create($materiaEstudiante);
        }
    }
}
