<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ReservaController extends Controller
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
    public function create(Request $request, Cliente $cliente)
    {
        return (view('reservar_cliente', ['cliente' => $cliente, 'habitacion_id' => $request->seleccionado]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $reserva = new Reserva();
        $reserva->estado = $request->input('estado');
        $reserva->nombre_cliente = $request->input('nombre_cliente');
        $reserva->numero_dias =  $request->input('numero_dias');
        $reserva->fecha_inicio =  $request->input('fecha_inicio');
        $reserva->fecha_fin = $request->input('fecha_fin');
        $reserva->responsable = $request->input('responsable');
        $reserva->habitacion_id = $request->input('habitacion_id');
        $reserva->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
