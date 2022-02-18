<?php

namespace App\Http\Controllers;

use App\Models\Musics;
use App\Http\Requests\StoreMusicsRequest;
use App\Http\Requests\UpdateMusicsRequest;

class MusicsController extends Controller
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
     * @param  \App\Http\Requests\StoreMusicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMusicsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Musics  $musics
     * @return \Illuminate\Http\Response
     */
    public function show(Musics $musics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musics  $musics
     * @return \Illuminate\Http\Response
     */
    public function edit(Musics $musics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMusicsRequest  $request
     * @param  \App\Models\Musics  $musics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMusicsRequest $request, Musics $musics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musics  $musics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musics $musics)
    {
        //
    }
}
