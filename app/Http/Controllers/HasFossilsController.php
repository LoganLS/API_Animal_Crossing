<?php

namespace App\Http\Controllers;

use App\Models\HasFossils;
use App\Http\Requests\StoreHasFossilsRequest;
use App\Http\Requests\UpdateHasFossilsRequest;

class HasFossilsController extends Controller
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
     * @param  \App\Http\Requests\StoreHasFossilsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHasFossilsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HasFossils  $hasFossils
     * @return \Illuminate\Http\Response
     */
    public function show(HasFossils $hasFossils)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasFossils  $hasFossils
     * @return \Illuminate\Http\Response
     */
    public function edit(HasFossils $hasFossils)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHasFossilsRequest  $request
     * @param  \App\Models\HasFossils  $hasFossils
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHasFossilsRequest $request, HasFossils $hasFossils)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasFossils  $hasFossils
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasFossils $hasFossils)
    {
        //
    }
}
