<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fishes;
use App\Models\HasFish;
use App\Http\Requests\StoreHasFishRequest;
use App\Http\Requests\UpdateHasFishRequest;
use App\Models\User;

class HasFishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasfish = HasFish::all();

        return response()->json($hasfish);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHasFishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHasFishRequest $request)
    {
        $request->validate([
            'user_id' => 'required',
            'fish_id' => 'required'
        ]);

        $hasfish = new HasFish([
            'user_id' => $request->get('user_id'),
            'fish_id' => $request->get('fish_id')
        ]);
        $hasfish->save();

        return response()->json([
            'success' => true,
            'hasfish' => $hasfish->id
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $userid
     * @param int $fishesid
     * @param  \App\Models\HasFish  $hasFish
     * @return \Illuminate\Http\Response
     */
    public function show($userid, $fishesid)
    {
        $user = User::find($userid);
        $user->fishes()->where('fish_id', $fishesid);

        if (count($user->get()) > 0)
        {
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasFish  $hasFish
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hashfish = HasFish::find($id);
        $hashfish->delete();

        return response()->json(['success' => true]);
    }
}
