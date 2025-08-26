<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Seeder;

class AulaSeeder extends Seeder
{
    public function run(): void
    {
        $aulas = [
            ['numero' => 'A101', 'capacidad' => 40, 'ubicacion' => 'Edificio A - Planta Baja'],
            ['numero' => 'A102', 'capacidad' => 35, 'ubicacion' => 'Edificio A - Planta Baja'],
            ['numero' => 'B201', 'capacidad' => 50, 'ubicacion' => 'Edificio B - Segundo Piso'],
            ['numero' => 'B202', 'capacidad' => 45, 'ubicacion' => 'Edificio B - Segundo Piso'],
            ['numero' => 'LAB01', 'capacidad' => 25, 'ubicacion' => 'Laboratorio de Computación'],
            ['numero' => 'LAB02', 'capacidad' => 30, 'ubicacion' => 'Laboratorio de Programación'],
        ];

        foreach ($aulas as $aula) {
            Aula::create($aula);
        }
    }
}
