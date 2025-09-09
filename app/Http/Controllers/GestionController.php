<?php

namespace App\Http\Controllers;

use App\Jobs\StoreJob;
use App\Models\Gestion;
use App\Jobs\DestroyJob;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function index()
    {
        return Gestion::with(['inscripciones', 'grupos'])->get();
    }

    public function store(Request $request)
    {
        StoreJob::dispatch(Gestion::class, $request->all());
        return response()->json(['message' => 'Gestion en proceso de creación'], 202);
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
        DestroyJob::dispatch(Gestion::class, $id);
        return response()->json(['message' => 'Gestión en proceso de eliminación'], 202);
    }
}
