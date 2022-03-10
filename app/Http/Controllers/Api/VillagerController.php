<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Villager;
use Illuminate\Http\JsonResponse;

class VillagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $villagers = Villager::query()
            ->leftJoin('languages_data', 'languages_data.id', '=', 'villagers.lang_id')
            ->select('villagers.*', 'languages_data.*')
            ->where('languages_data.name', 'fr');

        return response()->json($villagers->get());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $villager = Villager::find($id);

        return response()->json($villager);
    }
}
