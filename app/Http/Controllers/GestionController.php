<?php

namespace App\Http\Controllers;

use App\Models\Gestion;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function index()
    {
        return Gestion::with(['inscripciones', 'grupos'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'año' => 'required|integer|min:2000|max:2100',
            'periodo' => 'required|integer|in:1,2'
        ]);

        return Gestion::create($request->all());
    }

    public function show(string $id)
    {
        return Gestion::with(['inscripciones', 'grupos'])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $gestion = Gestion::findOrFail($id);

        $request->validate([
            'año' => 'required|integer|min:2000|max:2100',
            'periodo' => 'required|integer|in:1,2'
        ]);

        $gestion->update($request->all());
        return $gestion;
    }

    public function destroy(string $id)
    {
        $gestion = Gestion::findOrFail($id);
        $gestion->delete();
        return response()->noContent();
    }
}
