<?php

namespace App\Http\Controllers;

use App\Models\Fossils;
use App\Http\Requests\StoreFossilsRequest;
use App\Http\Requests\UpdateFossilsRequest;

class FossilsController extends Controller
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
     * @param  \App\Http\Requests\StoreFossilsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFossilsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fossils  $fossils
     * @return \Illuminate\Http\Response
     */
    public function show(Fossils $fossils)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fossils  $fossils
     * @return \Illuminate\Http\Response
     */
    public function edit(Fossils $fossils)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFossilsRequest  $request
     * @param  \App\Models\Fossils  $fossils
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFossilsRequest $request, Fossils $fossils)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fossils  $fossils
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fossils $fossils)
    {
        //
    }
}
