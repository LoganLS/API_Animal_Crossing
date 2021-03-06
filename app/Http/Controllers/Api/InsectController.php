<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Insect;
use App\Models\LanguageData;
use App\Models\User;
use App\Models\Villager;
use Illuminate\Http\Request;

class InsectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $insects = Insect::query()
            ->select('bugs.*', 'languages_data.name AS LangDataName')
            ->leftJoin('languages_data', 'languages_data.id', '=', 'bugs.lang_id')
            ->where('languages_data.name', LanguageData::getEn()->name)->get();

        $user = User::where('api_token', $request->get('api_token'))->first();

        foreach ($insects as $insect) {
            $insect->hasInsect = count($user->insects()->where('insect_id', $insect->id)->get()) > 0 ? true : false;
        }
        return response()->json($insects);
    }

    public function getInsectsUser(Request $request)
    {
        $user = User::where('api_token', $request->get('api_token'))->first();
        $userInsects = $user->insects;

        return response()->json($userInsects);
    }

    public function show($id)
    {
        $insect = Insect::find($id);

        return response()->json($insect);
    }
}
