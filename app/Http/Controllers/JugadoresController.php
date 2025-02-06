<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJugadoresRequest;
use App\Http\Requests\UpdateJugadoresRequest;
use App\Models\Jugadores;
use Illuminate\Http\RedirectResponse;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugadores::all();

        return view('jugadores.index', ['jugadores' => $jugadores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJugadoresRequest $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => ['required', 'max:255'],
            'apellido' => 'required|max:255',
        ]);
        return redirect()->route('jugadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugadores $jugadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugadores $jugadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJugadoresRequest $request, Jugadores $jugadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugadores $jugadores)
    {
        //
    }
}
