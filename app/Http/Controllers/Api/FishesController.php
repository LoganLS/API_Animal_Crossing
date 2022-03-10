<?php

namespace App\Http\Controllers;

use App\Models\Fishes;
use App\Http\Requests\StoreFishesRequest;
use App\Http\Requests\UpdateFishesRequest;

class FishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fishes = Fishes::all();

        return response()->json($fishes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fish = Fishes::find($id);

        return response()->json($fish);
    }
}
