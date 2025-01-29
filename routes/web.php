<?php

use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EstadiosController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    Route::resource('alineaciones', AlineacionController::class);
    Route::resource('incidencias', IncidenciaController::class);
    Route::resource('partidos.alineaciones', AlineacionController::class);
    Route::resource('partidos.incidencias', IncidenciaController::class);
    Route::resource('equipos.jugadores', JugadorController::class);

    Route::resource('jugadores.alineaciones', AlineacionController::class);*/
    Route::resource('/estadios', EstadiosController::class);
    Route::resource('/jugadores', JugadoresController::class);
    Route::resource('/partidos', PartidosController::class);
    Route::resource('equipos', EquiposController::class);

});



require __DIR__.'/auth.php';
