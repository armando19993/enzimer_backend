<?php

namespace App\Http\Controllers;

use App\Models\HistorialMembresia;
use App\Models\Planes;
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
        $fecha_actual = date('Y-m-d');
        $plan = Planes::find($request->id_plan);
        //Membresia
        $membresia = new HistorialMembresia();
        $membresia->id_plan = $request->id_plan;
        $membresia->codigo_plan = $request->cupon_id;
        $membresia->monto = $request->monto;
        $membresia->fecha_inicio = $fecha_actual;
        $membresia->fecha_fin = date("Y-m-d",strtotime($fecha_actual."+ ". $plan->duracion ." month"));
        $membresia->id_usuario = $request->id_usuario;
        $membresia->save();

        //Transaccion
        $transaccion = Transacciones::create([
            'id_historial_membresia' => $membresia->id,
            'monto' => $request->monto,
            'status' => 1,
            'fecha' => $fecha_actual,
            'codigo_pasarela' => $request->uuid,
            'card_number' => $request->pan,
            'tipo_tarjeta' => $request->brand,
            'ip_pago' => $request->ip_pago
        ]);

        return response()->json([
            'data' => $transaccion,
            'error' => null,
            'id_transaccion' => $transaccion->codigo_pasarela
        ]);

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
