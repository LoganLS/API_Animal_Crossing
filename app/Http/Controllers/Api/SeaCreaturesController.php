<?php

namespace App\Http\Controllers;

use App\Models\SeaCreatures;
use App\Http\Requests\StoreSeaCreaturesRequest;
use App\Http\Requests\UpdateSeaCreaturesRequest;

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
