<?php

namespace App\Http\Controllers;

use App\Models\ProfileImage;
use App\Http\Requests\StoreProfileImageRequest;
use App\Http\Requests\UpdateProfileImageRequest;

class ProfileImageController extends Controller
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
     * @param  \App\Http\Requests\StoreProfileImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfileImage  $profileImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileImage $profileImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfileImage  $profileImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileImage $profileImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileImageRequest  $request
     * @param  \App\Models\ProfileImage  $profileImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileImageRequest $request, ProfileImage $profileImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfileImage  $profileImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileImage $profileImage)
    {
        //
    }
}
