<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Seeder;

class AulaSeeder extends Seeder
{
    public function run(): void
    {
        $aulas = [
            ['numero' => 'A101', 'modulo_id' => 1],
            ['numero' => 'A102', 'modulo_id' => 1],
            ['numero' => 'A103', 'modulo_id' => 1],
            ['numero' => 'A104', 'modulo_id' => 1],
        ];

        foreach ($aulas as $aula) {
            Aula::create($aula);
        }
    }
}
