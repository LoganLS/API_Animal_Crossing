<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LanguageData;
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
        $villagers = Villager::query()
            ->select('villagers.*', 'languages_data.name AS LangDataName')
            ->leftJoin('languages_data', 'languages_data.id', '=', 'villagers.lang_id')
            ->where('languages_data.name', LanguageData::getFr()->name)
            ->with('species')
            ->with('gender')
            ->with('personality');

        return response()->json($villagers->get());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $villager = Villager::find($id);

        return response()->json($villager);
    }

    public function searchVillagers(Request $request)
    {
        $villagers = Villager::query();
        $requestSearch = $request->all();

        $filters['name'] = $requestSearch['name'] !== '' ?  $requestSearch['name'] : null;
        $filters['species'] = $requestSearch['species'] !== '' ?  $requestSearch['species'] : null;
        $filters['personalities'] = $requestSearch['personalities'] !== '' ?  $requestSearch['personalities'] : null;

        $villagers = $villagers
            ->select('villagers.*', 'languages_data.name AS LangDataName')
            ->leftJoin('languages_data', 'languages_data.id', '=', 'villagers.lang_id')
            ->where('languages_data.name', LanguageData::getFr()->name)
            ->with('species')
            ->with('personality')
            ->with('gender');

        if ($filters['name'] !== null) {
            $villagers->where('villagers.code', 'LIKE', $filters['name']);
        }
        if ($filters['species'] !== null) {
            $villagers
                ->leftJoin('species', 'species.id', '=', 'villagers.species_id')
                ->select('villagers.*', 'species.name AS SpeciesName', 'species.code AS SpeciesCode')
                ->where('species.code', 'LIKE', $filters['species']);
        }
        if ($filters['personalities'] !== null) {
            $villagers
                ->leftJoin('personalities', 'personalities.id', '=', 'villagers.personality_id')
                ->select('villagers.*', 'personalities.name AS PersonalitiesName', 'personalities.code AS PersonalitiesCode')
                ->where('personalities.code', 'LIKE', $filters['personalities']);
        }

        return response()->json($villagers->get());
    }

    public function getVillagersName()
    {
        $villagers = Villager::query()
            ->leftJoin('languages_data', 'languages_data.id', '=', 'villagers.lang_id')
            ->select('villagers.name', 'villagers.code', 'languages_data.name AS LangDataName')
            ->where('languages_data.name', 'fr');

            return response()->json($villagers->get());
    }
}
