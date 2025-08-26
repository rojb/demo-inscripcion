<?php

namespace Database\Seeders;

use App\Models\Docente;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    public function run(): void
    {
        $docentes = [
            ['registro' => 'DOC001', 'nombre' => 'Gino Silva Mamani', 'email' => 'roberto.silva@uagrm.bo', 'telefono' => '76123456'],
            ['registro' => 'DOC002', 'nombre' => 'Miriam Quispe Condori', 'email' => 'patricia.quispe@uagrm.bo', 'telefono' => '76234567'],
            ['registro' => 'DOC003', 'nombre' => 'Alberto Vargas Cruz', 'email' => 'miguel.vargas@uagrm.bo', 'telefono' => '76345678'],
            ['registro' => 'DOC004', 'nombre' => 'Carmen Flores Mamani', 'email' => 'carmen.flores@uagrm.bo', 'telefono' => '76456789'],
            ['registro' => 'DOC005', 'nombre' => 'Juan tomas Choque Silva', 'email' => 'fernando.choque@uagrm.bo', 'telefono' => '76567890'],
        ];

        foreach ($docentes as $docente) {
            Docente::create($docente);
        }
    }
}
