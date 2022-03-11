<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HasInsect;
use Illuminate\Http\Request;
use App\Models\User;

class HasInsectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasinsect = HasInsect::all();

        return response()->json($hasinsect);
    }

    public function attachInsectUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'insect_id' => 'required'
        ]);

        HasInsect::create([
            'user_id' => $request->get('user_id'),
            'insect_id' => $request->get('insect_id')
        ]);

        return response()->json([
            'success' => true,
        ]);

    }

    public function detachInsectUser(Request $request)
    {
        $hasinsect = HasInsect::where('user_id', $request->get('user_id'))
            ->where('insect_id', $request->get('insect_id'));
        $hasinsect->delete();

        return response()->json(['success' => true]);
    }
}
