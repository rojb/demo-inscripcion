<?php

namespace Database\Seeders;

use App\Models\Gestion;
use Illuminate\Database\Seeder;

class GestionSeeder extends Seeder
{
    public function run(): void
    {
        $gestiones = [
            ['ano' => 2023, 'periodo' => 1],
            ['ano' => 2023, 'periodo' => 2],
            ['ano' => 2024, 'periodo' => 1],
            ['ano' => 2024, 'periodo' => 2],
            ['ano' => 2025, 'periodo' => 1],
        ];

        foreach ($gestiones as $gestion) {
            Gestion::create($gestion);
        }
    }
}