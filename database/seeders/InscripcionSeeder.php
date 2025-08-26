<?php

namespace Database\Seeders;

use App\Models\Inscripcion;
use Illuminate\Database\Seeder;

class InscripcionSeeder extends Seeder
{
    public function run(): void
    {
        $inscripciones = [
            ['fecha' => '2025-01-15', 'estudiante_id' => 1, 'gestion_id' => 5],
            ['fecha' => '2025-01-15', 'estudiante_id' => 2, 'gestion_id' => 5],
            ['fecha' => '2025-01-16', 'estudiante_id' => 3, 'gestion_id' => 5],
            ['fecha' => '2025-01-16', 'estudiante_id' => 4, 'gestion_id' => 5],
            ['fecha' => '2025-01-17', 'estudiante_id' => 5, 'gestion_id' => 5],
        ];

        foreach ($inscripciones as $inscripcion) {
            Inscripcion::create($inscripcion);
        }
    }
}