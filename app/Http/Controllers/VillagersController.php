<?php

namespace App\Http\Controllers;

use App\Models\Villagers;
use App\Http\Requests\StoreVillagersRequest;
use App\Http\Requests\UpdateVillagersRequest;

class VillagersController extends Controller
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
     * @param  \App\Http\Requests\StoreVillagersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVillagersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Villagers  $villagers
     * @return \Illuminate\Http\Response
     */
    public function show(Villagers $villagers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Villagers  $villagers
     * @return \Illuminate\Http\Response
     */
    public function edit(Villagers $villagers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVillagersRequest  $request
     * @param  \App\Models\Villagers  $villagers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVillagersRequest $request, Villagers $villagers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villagers  $villagers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villagers $villagers)
    {
        //
    }
}
