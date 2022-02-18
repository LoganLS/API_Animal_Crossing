<?php

namespace App\Http\Controllers;

use App\Models\Commentaries;
use App\Http\Requests\StoreCommentariesRequest;
use App\Http\Requests\UpdateCommentariesRequest;

class CommentariesController extends Controller
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
     * @param  \App\Http\Requests\StoreCommentariesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentariesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaries  $commentaries
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaries $commentaries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaries  $commentaries
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaries $commentaries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentariesRequest  $request
     * @param  \App\Models\Commentaries  $commentaries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentariesRequest $request, Commentaries $commentaries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaries  $commentaries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaries $commentaries)
    {
        //
    }
}
