<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Insect;
use App\Models\LanguageData;
use App\Models\Villager;
use Illuminate\Http\Request;

class InsectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insects = Insect::query()
            ->select('bugs.*', 'languages_data.name AS LangDataName')
            ->leftJoin('languages_data', 'languages_data.id', '=', 'bugs.lang_id')
            ->where('languages_data.name', LanguageData::getEn()->name);

        return response()->json($insects->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insect = Insect::find($id);

        return response()->json($insect);
    }
}
