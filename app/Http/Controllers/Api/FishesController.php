<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fishes;
use App\Models\HasFish;
use App\Models\User;
use Illuminate\Http\Request;

class FishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fishes = Fishes::all();
        $user = User::where('api_token', $request->get('api_token'))->first();

        foreach ($fishes as $fish) {
            $fish->hasFish = count($user->fishes()->where('fish_id', $fish->id)->get()) > 0 ? true : false;
        }

        return response()->json($fishes);
    }

    public function getFishesUser(Request $request)
    {
        $user = User::where('api_token', $request->get('api_token'))->first();
        $userFishes = $user->fishes;

        return response()->json($userFishes);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fish = Fishes::find($id);

        return response()->json($fish);
    }

    public function searchFishes(Request $request)
    {
        $fishes = Fishes::query();
        $requestSearch = $request->all();
        $user = User::where('api_token', $request->get('api_token'))->first();

        $filters['name'] = $requestSearch['name'] !== '' ? $requestSearch['name'] : null;
        $filters['hasFish'] = $requestSearch['hasFish'] !== '' ? $requestSearch['hasFish'] : null;

        $fishes = $fishes
            ->select('fishes.*');

        if ($filters['name'] !== null) {
            $fishes->where('fishes.name', 'LIKE', $filters['name']);
        }
        if ($filters['hasFish'] === "true") {
            $fishes
                ->leftJoin('has_fishes', 'has_fishes.fish_id', '=', 'fishes.id')
                ->where('has_fishes.user_id', '=', $user->id)
                ;
        } else if($filters['hasFish'] === "false") {
            $fishes_acquired = HasFish::query();
            $fishes_acquired = $fishes_acquired
                ->select('has_fishes.fish_id')
                ->where('has_fishes.user_id', '=', $user->id);

            $fishes->whereNotIn('id', $fishes_acquired);
        }

        $fishes = $fishes->get();

        foreach ($fishes as $fish) {
            $fish->hasFish = count($user->fishes()->where('fish_id', $fish->id)->get()) > 0 ? true : false;
        }

        return response()->json($fishes);
    }
}
