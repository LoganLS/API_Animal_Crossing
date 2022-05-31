<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HasSeaCreature;
use Illuminate\Http\Request;

class HasSeaCreatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasSeaCreature = HasSeaCreature::all();

        return response()->json($hasSeaCreature);
    }

    public function attachSeaCreatureUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'sea_creature_id' => 'required'
        ]);

        HasSeaCreature::create([
            'user_id' => $request->get('user_id'),
            'sea_creature_id' => $request->get('sea_creature_id')
        ]);

        return response()->json([
            'success' => true,
        ]);

    }

    public function detachSeaCreatureUser(Request $request)
    {
        $hasSeaCreature = HasSeaCreature::where('user_id', $request->get('user_id'))
            ->where('sea_creature_id', $request->get('sea_creature_id'));
        $hasSeaCreature->delete();

        return response()->json(['success' => true]);
    }
}
