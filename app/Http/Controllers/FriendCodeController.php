<?php

namespace App\Http\Controllers;

use App\Models\FriendCode;
use App\Http\Requests\StoreFriendCodeRequest;
use App\Http\Requests\UpdateFriendCodeRequest;

class FriendCodeController extends Controller
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
     * @param  \App\Http\Requests\StoreFriendCodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFriendCodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FriendCode  $friendCode
     * @return \Illuminate\Http\Response
     */
    public function show(FriendCode $friendCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FriendCode  $friendCode
     * @return \Illuminate\Http\Response
     */
    public function edit(FriendCode $friendCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFriendCodeRequest  $request
     * @param  \App\Models\FriendCode  $friendCode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFriendCodeRequest $request, FriendCode $friendCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FriendCode  $friendCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(FriendCode $friendCode)
    {
        //
    }
}
