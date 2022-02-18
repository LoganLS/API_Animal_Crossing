<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use App\Http\Requests\StorePublicationsRequest;
use App\Http\Requests\UpdatePublicationsRequest;

class PublicationsController extends Controller
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
     * @param  \App\Http\Requests\StorePublicationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublicationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function show(Publications $publications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function edit(Publications $publications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublicationsRequest  $request
     * @param  \App\Models\Publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublicationsRequest $request, Publications $publications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publications $publications)
    {
        //
    }
}
