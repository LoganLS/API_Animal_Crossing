<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->apiResource("villagers", "VillagerController")->except(['store', 'destroy', 'update']);
Route::middleware('auth:api')->apiResource("characters", "CharacterController")->except(['store', 'destroy', 'update']);
Route::middleware('auth:api')->apiResource("musics", "MusicController")->except(['store', 'destroy', 'update']);
Route::middleware('auth:api')->apiResource("fishes", "FishesController")->except(['store', 'destroy', 'update']);
/*Route::middleware('auth:api')->apiResource("users", "UserController")->except(['store', 'destroy', 'update']);*/

Route::middleware('auth:api')->get('me', 'UserController@show')->name('api.user.show');
