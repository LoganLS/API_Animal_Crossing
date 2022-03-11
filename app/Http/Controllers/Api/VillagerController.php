<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LanguageData;
use App\Models\Villager;
use Carbon\Carbon;
use DateTime;
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
        $villager = Villager::where('id', $id)
            ->with('species')
            ->with('gender')
            ->with('personality')->get();

        return response()->json($villager);
    }

    public function searchVillagers(Request $request)
    {
        $villagers = Villager::query();
        $requestSearch = $request->all();

        $filters['name'] = $requestSearch['name'] !== '' ? $requestSearch['name'] : null;
        $filters['species'] = $requestSearch['species'] !== '' ? $requestSearch['species'] : null;
        $filters['personalities'] = $requestSearch['personalities'] !== '' ? $requestSearch['personalities'] : null;

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

    public function getVillagersAnniversary()
    {
        Carbon::setLocale('en');

        $currentDateDay = now()->day;
        $currentDateMonth = now()->getTranslatedMonthName();

        $villagers = Villager::query()
            ->leftJoin('languages_data', 'languages_data.id', '=', 'villagers.lang_id')
            ->select('villagers.id','villagers.name', 'villagers.image_url', 'languages_data.name AS LangDataName')
            ->where('languages_data.name', 'fr');

        $villagers = $villagers
            ->where('birthday_day', $currentDateDay)
            ->where('birthday_month',  ucfirst($currentDateMonth))->get();

       return response()->json($villagers);
    }

    function months()
    {
        return [
            'January' => 'Janvier',
            'February' => 'Février',
            'March' => 'Mars',
            'April' => 'Avril',
            'May' => 'Mai',
            'June' => 'Juin',
            'July' => 'Juillet',
            'August' => 'Août',
            'September' => 'Septembre',
            'November' => 'Novembre',
            'December' => 'Décembre',
        ];
    }
}
