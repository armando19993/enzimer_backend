<?php

namespace App\Http\Controllers;

use App\Models\Cupones;
use Illuminate\Http\Request;

class CuponesController extends Controller
{

    public function index_api( $cupon )
    {
        $cupon = Cupones::where('codigo', $cupon)->first();

        if($cupon == null)
        {
            return response()->json(
                [
                    'data' => "",
                    'error' => "Cupon no existe"
                ]
                );
        }
        else
        {
            return response()->json(
                [
                    'data' => $cupon,
                    'error' => null
                ]
                );
        }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function show(Cupones $cupones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function edit(Cupones $cupones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cupones $cupones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cupones $cupones)
    {
        //
    }
}
