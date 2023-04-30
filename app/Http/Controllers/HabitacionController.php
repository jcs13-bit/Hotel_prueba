<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Http\Controllers\Controller;
use App\Http\Requests\HabitacionesRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class HabitacionController extends Controller
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
    public function show(HabitacionesRequest $habitacion, Cliente $cliente)
    {
        $fecha = $habitacion->fecha_reserva;
        $cupo = $habitacion->cupo;
        $habitacionesConReservasActivas = Habitacion::join('reservas', function ($join) use ($fecha) {
            $join->on('habitaciones.id', '=', 'reservas.habitacion_id')
                 ->where('reservas.estado', '=', 'Activo')
                 ->where('reservas.fecha_inicio', '<=', $fecha)
                 ->where('reservas.fecha_fin', '>=', $fecha);
        })->select('habitaciones.*')->get();
        $habitacionesConCapacidad = Habitacion::where('cupo', '=', $cupo)->get();
        
        $habitacionesDisponibles = $habitacionesConCapacidad->union($habitacionesConReservasActivas);

        return view('habitaciones', ['habitaciones' => $habitacionesDisponibles ,'cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habitacion $habitacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Habitacion $habitacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habitacion $habitacion)
    {
        //
    }
}
