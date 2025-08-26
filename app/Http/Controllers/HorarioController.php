<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        return Horario::with(['grupo', 'aula', 'modulo'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'dia' => 'required|string|in:Lunes,Martes,Miércoles,Jueves,Viernes,Sábado,Domingo',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'grupo_id' => 'required|exists:grupos,id',
            'aula_id' => 'required|exists:aulas,id',
            'modulo_id' => 'required|exists:modulos,id'
        ]);

        return Horario::create($request->all());
    }

    public function show(string $id)
    {
        return Horario::with(['grupo', 'aula', 'modulo'])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $horario = Horario::findOrFail($id);

        $request->validate([
            'dia' => 'required|string|in:Lunes,Martes,Miércoles,Jueves,Viernes,Sábado,Domingo',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'grupo_id' => 'required|exists:grupos,id',
            'aula_id' => 'required|exists:aulas,id',
            'modulo_id' => 'required|exists:modulos,id'
        ]);

        $horario->update($request->all());
        return $horario;
    }

    public function destroy(string $id)
    {
        $horario = Horario::findOrFail($id);
        $horario->delete();
        return response()->noContent();
    }
}
