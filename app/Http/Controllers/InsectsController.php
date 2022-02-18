<?php

namespace App\Http\Controllers;

use App\Models\Insects;
use App\Http\Requests\StoreInsectsRequest;
use App\Http\Requests\UpdateInsectsRequest;

class InsectsController extends Controller
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
     * @param  \App\Http\Requests\StoreInsectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insects  $insects
     * @return \Illuminate\Http\Response
     */
    public function show(Insects $insects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insects  $insects
     * @return \Illuminate\Http\Response
     */
    public function edit(Insects $insects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsectsRequest  $request
     * @param  \App\Models\Insects  $insects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsectsRequest $request, Insects $insects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insects  $insects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insects $insects)
    {
        //
    }
}
