<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // On récupère tous les utilisateurs
        $users = User::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return void
     */
    public function store(UserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user = User::where('api_token', $request->get('api_token'))->first();
        $user = new UserResource($user);

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // On supprime l'utilisateur
        $user->delete();

        // On retourne la réponse JSON
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request)
    {
        $validated = $request->validate([
            'username'=>"max:15",
            "description"=>"nullable|min:10"
        ]);
        // On update l'utilisateur
        $user = $request->user();
        if(isset($validated["username"])){
                $user->username = $validated["username"];
        }
        if(isset($validated["description"])){
            $user->description = $validated["description"];
        }
        if(isset($validated["favoriteSerie"])){
            $user->set_furniture_id = $validated["favoriteSerie"];
        }
        
        // On retourne la réponse JSON
        return response()->json($user);
    }
}
