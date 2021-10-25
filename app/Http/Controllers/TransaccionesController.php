<?php

namespace App\Http\Controllers;

use App\Models\HistorialMembresia;
use App\Models\Transacciones;
use Illuminate\Http\Request;

class TransaccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $membresia = new HistorialMembresia();
        $membresia->id_plan = $request->id_plan;
        $membresia->codigo_plan = $request->codigo_plan;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transacciones  $transacciones
     * @return \Illuminate\Http\Response
     */
    public function show(Transacciones $transacciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transacciones  $transacciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Transacciones $transacciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transacciones  $transacciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transacciones $transacciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transacciones  $transacciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transacciones $transacciones)
    {
        //
    }
}
