<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\EquiposApiController;
use App\Http\Controllers\Api\V1\JugadoresApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->apiResource('equipos', EquiposApiController::class);

Route::get('/jugadores', [JugadoresApiController::class,'index']);
