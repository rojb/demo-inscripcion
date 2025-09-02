<?php

namespace App\Jobs;

use App\Models\Facultad;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class GuardarFacultadJob implements ShouldQueue
{
    use Queueable;

    protected array $dato;

    public function __construct(array $dato)
    {
        $this->dato = $dato;
    }

    public function handle(): void
    {
        try {
            Facultad::create($this->dato);
            \Log::info("Facultad creada.");
        } catch (\Throwable $e) {
            \Log::error("Error al guardar facultad: " . $e->getMessage());
            // TODO: Definir si se reintenta, si se registra como fallido, etc.,
        }
    }

    // public function viaQueue()
    // {
    //     return 'principal';
    // }
}
