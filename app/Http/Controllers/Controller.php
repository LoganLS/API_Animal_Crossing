<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function getApiToken() {
        dd(auth('api')->check());
        if (Auth::guard('user')->user() !== null) {
            $user = [
                'id' => Auth::guard('user')->user()->id,
                'api_token' => Auth::guard('user')->user()->api_token,
            ];
            return json_encode($user);
        }

        return false;
    }
}
