<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/token', function (Request $request) {
    return csrf_token();
});
Route::get('/user_token', function () {
    if(Auth::guard('user')->user() !== null) {
        $user = [
            'id' => Auth::guard('user')->user()->id,
            'api_token' => Auth::guard('user')->user()->api_token,
        ];
        return json_encode($user);
    }
    return false;
});
