<?php

namespace Database\Seeders;

use App\Models\Carrera;
use App\Models\Facultad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    public function run(): void
    {
        $computacion = Facultad::create([
            'nombre' => 'Facultad de Ingeniería en ciencias de la computación y telecomunicaciones',
            'abreviacion' => 'FICCT'
        ]);
        Carrera::create(['codigo' => '187-4', 'nombre' => 'Ingeniería Informática', 'facultad_id' => $computacion->id]);
        Carrera::create(['codigo' => '187-6', 'nombre' => 'Ingeniería de Sistemas', 'facultad_id' => $computacion->id]);
        Carrera::create(['codigo' => '187-7', 'nombre' => 'Ingeniería en Redes y Telecomunicaciones', 'facultad_id' => $computacion->id]);

        $humanidades = Facultad::create([
            'nombre' => 'Facultad de Humanidades',
            'abreviacion' => 'FH'
        ]);
        Carrera::create(['codigo' => '187-5', 'nombre' => 'Psicología', 'facultad_id' => $humanidades->id]);
    }
}
