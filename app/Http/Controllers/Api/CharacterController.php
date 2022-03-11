<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\LanguageData;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::query()
            ->select('characters.*', 'languages_data.name AS LangDataName')
            ->leftJoin('languages_data', 'languages_data.id', '=', 'characters.lang_id')
            ->where('languages_data.name', LanguageData::getFr()->name)
            ->with('gender');

        return response()->json($characters->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::find($id);

        return response()->json($character);
    }
}
