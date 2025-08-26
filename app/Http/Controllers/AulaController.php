<?php

namespace App\Http\Controllers;

use App\Models\Aula;
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

        return Aula::create($request->all());
    }

    public function show(string $id)
    {
        return Aula::with('horarios')->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $aula = Aula::findOrFail($id);

        $request->validate([
            'numero' => 'required|string',
            'capacidad' => 'nullable|integer|min:1',
            'ubicacion' => 'nullable|string'
        ]);

        $aula->update($request->all());
        return $aula;
    }

    public function destroy(string $id)
    {
        $aula = Aula::findOrFail($id);
        $aula->delete();
        return response()->noContent();
    }
}
