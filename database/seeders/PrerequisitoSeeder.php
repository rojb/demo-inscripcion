<?php

namespace Database\Seeders;

use App\Models\Materia;
use App\Models\Prerequisito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrerequisitoSeeder extends Seeder
{
    public function run(): void
    {
        $calculo1 = Materia::where('sigla', 'MAT101')->first();
        $calculo2 = Materia::where('sigla', 'MAT102')->first();
        Prerequisito::create([
            'materia_id' => $calculo2->id,
            'prerequisito_id' => $calculo1->id,
        ]);
    }
}
