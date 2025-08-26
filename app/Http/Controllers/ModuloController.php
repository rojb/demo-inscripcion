<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        return Modulo::with('horarios')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|string',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio'
        ]);

        return Modulo::create($request->all());
    }

    public function show(string $id)
    {
        return Modulo::with('horarios')->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $modulo = Modulo::findOrFail($id);

        $request->validate([
            'numero' => 'required|string',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio'
        ]);

        $modulo->update($request->all());
        return $modulo;
    }

    public function destroy(string $id)
    {
        $modulo = Modulo::findOrFail($id);
        $modulo->delete();
        return response()->noContent();
    }
}
