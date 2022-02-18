<?php

namespace App\Http\Controllers;

use App\Models\Fishes;
use App\Http\Requests\StoreFishesRequest;
use App\Http\Requests\UpdateFishesRequest;

class FishesController extends Controller
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
     * @param  \App\Http\Requests\StoreFishesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFishesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fishes  $fishes
     * @return \Illuminate\Http\Response
     */
    public function show(Fishes $fishes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fishes  $fishes
     * @return \Illuminate\Http\Response
     */
    public function edit(Fishes $fishes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFishesRequest  $request
     * @param  \App\Models\Fishes  $fishes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFishesRequest $request, Fishes $fishes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fishes  $fishes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fishes $fishes)
    {
        //
    }
}
