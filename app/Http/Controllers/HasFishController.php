<?php

namespace App\Http\Controllers;

use App\Models\HasFish;
use App\Http\Requests\StoreHasFishRequest;
use App\Http\Requests\UpdateHasFishRequest;

class HasFishController extends Controller
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
     * @param  \App\Http\Requests\StoreHasFishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHasFishRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HasFish  $hasFish
     * @return \Illuminate\Http\Response
     */
    public function show(HasFish $hasFish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasFish  $hasFish
     * @return \Illuminate\Http\Response
     */
    public function edit(HasFish $hasFish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHasFishRequest  $request
     * @param  \App\Models\HasFish  $hasFish
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHasFishRequest $request, HasFish $hasFish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasFish  $hasFish
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasFish $hasFish)
    {
        //
    }
}
