<?php

namespace App\Http\Controllers;

use App\Jobs\DestroyJob;
use App\Models\MateriaPlan;
use Illuminate\Http\Request;

class MateriaPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MateriaPlan $materiaPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriaPlan $materiaPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MateriaPlan $materiaPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DestroyJob::dispatch(MateriaPlan::class, $id);
        return response()->json(['message' => 'Materia Plan en proceso de eliminación'], 202);
    }
}
