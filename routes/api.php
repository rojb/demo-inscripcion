<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Hola mundo
Route::get('/hola', function () {
    return response()->json(['message' => 'Hola topicos Postgress']);
});

Route::get('/materias-carrera/{carrera}', [MateriaController::class, 'obtenerMateriasUltimoPlan']);
Route::get('/materias', [MateriaController::class, 'index']);
Route::post('/materias', [MateriaController::class, 'store']);
Route::get('/materias/{id}', [MateriaController::class, 'show']);
Route::put('/materias/{id}', [MateriaController::class, 'update']);
Route::delete('/materias/{id}', [MateriaController::class, 'destroy']);
