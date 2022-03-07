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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSeaCreaturesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeaCreaturesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeaCreatures  $seaCreatures
     * @return \Illuminate\Http\Response
     */
    public function show(SeaCreatures $seaCreatures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeaCreatures  $seaCreatures
     * @return \Illuminate\Http\Response
     */
    public function edit(SeaCreatures $seaCreatures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeaCreaturesRequest  $request
     * @param  \App\Models\SeaCreatures  $seaCreatures
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeaCreaturesRequest $request, SeaCreatures $seaCreatures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeaCreatures  $seaCreatures
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeaCreatures $seaCreatures)
    {
        //
    }
}
