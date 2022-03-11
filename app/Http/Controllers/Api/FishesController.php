<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fishes;
use App\Models\User;
use Illuminate\Http\Request;

class FishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fishes = Fishes::all();
        $user = User::where('api_token', $request->get('api_token'))->first();

        foreach ($fishes as $fish) {
            $fish->hasFish = count($user->fishes()->where('fish_id', $fish->id)->get()) > 0 ? true : false;
        }

        return response()->json($fishes);
    }

    public function getFishesUser(Request $request)
    {
        $user = User::where('api_token', $request->get('api_token'))->first();
        $userFishes = $user->fishes;

        return response()->json($userFishes);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fish = Fishes::find($id);

        return response()->json($fish);
    }
}
