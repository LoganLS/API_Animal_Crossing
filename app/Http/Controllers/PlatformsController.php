<?php

namespace App\Http\Controllers;

use App\Models\Platforms;
use App\Http\Requests\StorePlatformsRequest;
use App\Http\Requests\UpdatePlatformsRequest;

class PlatformsController extends Controller
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
     * @param  \App\Http\Requests\StorePlatformsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlatformsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platforms  $platforms
     * @return \Illuminate\Http\Response
     */
    public function show(Platforms $platforms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platforms  $platforms
     * @return \Illuminate\Http\Response
     */
    public function edit(Platforms $platforms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlatformsRequest  $request
     * @param  \App\Models\Platforms  $platforms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlatformsRequest $request, Platforms $platforms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platforms  $platforms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platforms $platforms)
    {
        //
    }
}
