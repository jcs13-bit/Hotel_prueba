<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentoClienteRequest;
use App\Http\Requests\FormClienteRequest;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ("home", ['tipo_documentos' => TipoDocumento::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(FormClienteRequest $request)
    {
        $cliente = new Cliente();
        $cliente ->fill($request->all());
        $cliente->save();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
    public function registroValidar(DocumentoClienteRequest $request)
    {
    $cliente = Cliente::where('numero_documento', $request->numero_documento)->first();
    if ($cliente === null) {
        // El cliente no está registrado, mostrar formulario de registro
        return view('registro_cliente', ['tipo_documentos' => TipoDocumento::all()]);
    } else {
        // El cliente ya está registrado, mostrar formulario de reserva
        //return view('reserva_cliente', ['cliente' => $cliente]);
    }
    }
}
