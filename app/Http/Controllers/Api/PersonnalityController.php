<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Personality;
use App\Models\Species;
use Illuminate\Http\Request;

class PersonnalityController extends Controller
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function getPersonalitiesName()
    {
        $personalities = Personality::query()
            ->leftJoin('languages_data', 'languages_data.id', '=', 'personalities.lang_id')
            ->select('personalities.code', 'personalities.name', 'languages_data.name AS LangDataName')
            ->where('languages_data.name', 'fr');

        return response()->json($personalities->get());
    }
}
