<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    public function run(): void
    {
        Tipo::create(['nombre' => 'Normal']);
        Tipo::create(['nombre' => 'Electiva']);
    }
}
