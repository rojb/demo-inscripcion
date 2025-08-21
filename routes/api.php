<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Hola mundo
Route::get('/hola', function () {
    return response()->json(['message' => 'Hola topicos Postgress']);
});
