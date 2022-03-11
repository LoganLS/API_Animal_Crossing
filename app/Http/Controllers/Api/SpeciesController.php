<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Species;
use App\Models\Villager;
use Illuminate\Http\Request;

class SpeciesController extends Controller
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

    public function getSpeciesName()
    {
        $species = Species::query()
            ->leftJoin('languages_data', 'languages_data.id', '=', 'species.lang_id')
            ->select('species.*', 'languages_data.name AS LangDataName')
            ->where('languages_data.name', 'fr')->pluck('name', 'code');

        return response()->json($species->get());
    }
}
