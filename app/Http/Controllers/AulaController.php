<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Jobs\StoreJob;
use App\Jobs\DestroyJob;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        return Aula::with('horarios')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|string',
            'capacidad' => 'nullable|integer|min:1',
            'ubicacion' => 'nullable|string'
        ]);

        StoreJob::dispatch(Aula::class, $request->all());
        return response()->json(['message' => 'Aula en proceso de creación'], 202);
    }

    public function show(string $id)
    {
        return Aula::with('horarios')->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $aula = Aula::findOrFail($id);

        $request->validate([
            'numero' => 'required|string'
        ]);

        $aula->update($request->all());
        return $aula;
    }


    public function destroy(string $id)
    {
        DestroyJob::dispatch(Aula::class, $id);
        return response()->json(['message' => 'Aula en proceso de eliminación'], 202);
    }
}
