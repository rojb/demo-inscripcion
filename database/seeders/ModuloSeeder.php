<?php

namespace Database\Seeders;

use App\Models\Aula;
use App\Models\Modulo;
use Illuminate\Database\Seeder;

class ModuloSeeder extends Seeder
{
    public function run(): void
    {
        $modulos = [
            ['numero' => '123 A'],
            ['numero' => '223'],
            ['numero' => '225'],
            ['numero' => '123 B'],
            ['numero' => '236'],
        ];

        foreach ($modulos as $modulo) {
            $modulo = Modulo::create($modulo);
            $aulas = [
                ['numero' => '1', 'modulo_id' => $modulo->id],
                ['numero' => '2', 'modulo_id' => $modulo->id],
                ['numero' => '3', 'modulo_id' => $modulo->id],
                ['numero' => '4', 'modulo_id' => $modulo->id],
                ['numero' => '5', 'modulo_id' => $modulo->id],
                ['numero' => '6', 'modulo_id' => $modulo->id],
            ];

            foreach ($aulas as $aula) {
                Aula::create($aula);
            }
        }
    }
}
