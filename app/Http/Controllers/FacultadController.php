<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function index()
    {
        return Facultad::all();
    }

    public function show($id)
    {
        return Facultad::findOrFail($id);
    }

    public function store(Request $request)
    {
        $facultad = Facultad::create($request->all());
        return response()->json($facultad, 201);
    }

    public function update(Request $request, $id)
    {
        $facultad = Facultad::findOrFail($id);
        $facultad->update($request->all());
        return response()->json($facultad, 200);
    }

    public function destroy($id)
    {
        Facultad::destroy($id);
        return response()->json(null, 204);
    }
}
