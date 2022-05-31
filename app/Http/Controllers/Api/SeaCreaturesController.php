<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SeaCreatures;
use Illuminate\Http\Request;
use App\Models\User;

class SeaCreaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $seaCreatures = SeaCreatures::all();
        $user = User::where('api_token', $request->get('api_token'))->first();

        foreach ($seaCreatures as $seaCreature) {
            $seaCreature->hasSeaCreature = count($user->seaCreatures()->where('sea_creature_id', $seaCreature->id)->get()) > 0 ? true : false;
        }

        return response()->json($seaCreatures);
    }

    public function getSeaCreaturesUser(Request $request)
    {
        $user = User::where('api_token', $request->get('api_token'))->first();
        $userSeaCreatures = $user->seaCreatures;

        return response()->json($userSeaCreatures);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seaCreature = SeaCreatures::find($id);

        return response()->json($seaCreature);
    }
}
