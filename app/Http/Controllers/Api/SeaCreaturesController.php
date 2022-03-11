<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SeaCreatures;

class SeaCreaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seaCreatures = SeaCreatures::all();

        return response()->json($seaCreatures);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seaCreature = SeaCreatures::find($id);

        return response()->json($seaCreature);
    }
}
