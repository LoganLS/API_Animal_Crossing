<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fishes;
use App\Models\HasFish;
use Illuminate\Http\Request;
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

    public function attachFishUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'fish_id' => 'required'
        ]);

        HasFish::create([
            'user_id' => $request->get('user_id'),
            'fish_id' => $request->get('fish_id')
        ]);

        return response()->json([
            'success' => true,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $userid
     * @param int $fishesid
     * @param \App\Models\HasFish $hasFish
     * @return \Illuminate\Http\Response
     */
    public function show($userid, $fishesid)
    {
        $user = User::find($userid);
        $user->fishes()->where('fish_id', $fishesid);

        if (count($user->get()) > 0) {
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\HasFish $hasFish
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Request $request)
    {
        $hashfish = HasFish::where('user_id', $request->get('user_id'))->where('fish_id', $request->get('fish_id'));
        $hashfish->delete();

        return response()->json(['success' => true]);
    }
}
