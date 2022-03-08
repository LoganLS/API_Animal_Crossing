<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Villager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VillagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $villagers = Villager::all();

        return response()->json($villagers);
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
