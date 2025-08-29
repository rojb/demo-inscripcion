<?php

namespace Database\Seeders;

use App\Models\GrupoEstudiante;
use Illuminate\Database\Seeder;

class GrupoEstudianteSeeder extends Seeder
{
    public function run(): void
    {
        $grupoEstudiantes = [
            // Estudiante 1 cursando primer semestre
            ['nota' => 85.5, 'creditos' => 5, 'estudiante_id' => 1, 'grupo_id' => 1],
            ['nota' => 92.0, 'creditos' => 5, 'estudiante_id' => 1, 'grupo_id' => 2],
            ['nota' => 78.5, 'creditos' => 5, 'estudiante_id' => 1, 'grupo_id' => 3],

            // Estudiante 2 cursando primer semestre
            ['nota' => 88.0, 'creditos' => 5, 'estudiante_id' => 2, 'grupo_id' => 1],
            ['nota' => 95.5, 'creditos' => 5, 'estudiante_id' => 2, 'grupo_id' => 2],
            ['nota' => 82.0, 'creditos' => 5, 'estudiante_id' => 2, 'grupo_id' => 4],

            // Estudiante 3 cursando segundo semestre (ya aprobó primero)
            ['nota' => 90.0, 'creditos' => 5, 'estudiante_id' => 3, 'grupo_id' => 6],
            ['nota' => 87.5, 'creditos' => 5, 'estudiante_id' => 3, 'grupo_id' => 7],
            ['nota' => 91.0, 'creditos' => 5, 'estudiante_id' => 3, 'grupo_id' => 8],
        ];

        foreach ($grupoEstudiantes as $grupoEstudiante) {
            GrupoEstudiante::create($grupoEstudiante);
        }
    }
}
