<?php

namespace App\Http\Controllers;

use App\Models\Reactions;
use App\Http\Requests\StoreReactionsRequest;
use App\Http\Requests\UpdateReactionsRequest;

class ReactionsController extends Controller
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
     * @param  \App\Http\Requests\StoreReactionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReactionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reactions  $reactions
     * @return \Illuminate\Http\Response
     */
    public function show(Reactions $reactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reactions  $reactions
     * @return \Illuminate\Http\Response
     */
    public function edit(Reactions $reactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReactionsRequest  $request
     * @param  \App\Models\Reactions  $reactions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReactionsRequest $request, Reactions $reactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reactions  $reactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reactions $reactions)
    {
        //
    }
}
