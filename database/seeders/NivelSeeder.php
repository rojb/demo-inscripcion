<?php

namespace Database\Seeders;

use App\Models\Nivel;
use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    public function run(): void
    {
        Nivel::create(['nombre' => '1']);
        Nivel::create(['nombre' => '2']);
        Nivel::create(['nombre' => '3']);
        Nivel::create(['nombre' => '4']);
        Nivel::create(['nombre' => '5']);
        Nivel::create(['nombre' => '6']);
        Nivel::create(['nombre' => '7']);
        Nivel::create(['nombre' => '8']);
        Nivel::create(['nombre' => '9']);
        Nivel::create(['nombre' => '10']);
    }
}
