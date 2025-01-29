<?php

use App\Http\Controllers\JugadoresApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/api_jugadores', [JugadoresApiController::class,'index_api']);
