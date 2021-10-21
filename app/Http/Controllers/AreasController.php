<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function index_api( $universidad )
    {
        $areas = Areas::where('id_universidad', $universidad)->with(['carreras'])->get();

        return response()->json(
            [
                "data" => $areas
            ]
        );
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
     * @param  \App\Models\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function show(Areas $areas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit(Areas $areas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Areas $areas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Areas $areas)
    {
        //
    }
}
