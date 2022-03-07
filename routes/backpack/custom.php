<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('gender', 'GenderCrudController');
    Route::crud('language-data', 'LanguageDataCrudController');
    Route::crud('set-furniture', 'SetFurnitureCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('species', 'SpeciesCrudController');
    Route::crud('sign', 'SignCrudController');
    Route::crud('personality', 'PersonalityCrudController');
    Route::crud('villager', 'VillagerCrudController');
}); // this should be the absolute last line of this file
