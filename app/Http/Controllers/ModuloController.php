<?php

namespace App\Http\Controllers;

use App\Jobs\StoreJob;
use App\Models\Modulo;
use App\Jobs\DestroyJob;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        return Modulo::with('horarios')->get();
    }

    public function store(Request $request)
    {
        StoreJob::dispatch(Modulo::class, $request->all());
        return response()->json(['message' => 'Modulo en proceso de creación'], 202);
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
        DestroyJob::dispatch(Modulo::class, $id);
        return response()->json(['message' => 'Modulo en proceso de eliminación'], 202);
    }
}
