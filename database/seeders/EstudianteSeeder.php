<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    public function run(): void
    {
        $estudiantes = [
            ['registro' => '202300001', 'nombre' => 'Juan Pérez Mamani', 'email' => 'juan.perez@estudiante.uagrm.bo', 'telefono' => '78123456'],
            ['registro' => '202300002', 'nombre' => 'María García Condori', 'email' => 'maria.garcia@estudiante.uagrm.bo', 'telefono' => '78234567'],
            ['registro' => '202300003', 'nombre' => 'Carlos Quispe Flores', 'email' => 'carlos.quispe@estudiante.uagrm.bo', 'telefono' => '78345678'],
            ['registro' => '202300004', 'nombre' => 'Ana Choque Mamani', 'email' => 'ana.choque@estudiante.uagrm.bo', 'telefono' => '78456789'],
            ['registro' => '202300005', 'nombre' => 'Luis Vargas Cruz', 'email' => 'luis.vargas@estudiante.uagrm.bo', 'telefono' => '78567890'],
        ];

        foreach ($estudiantes as $estudiante) {
            Estudiante::create($estudiante);
        }
    }
}
