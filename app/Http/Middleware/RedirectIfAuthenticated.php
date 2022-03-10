<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            switch ($guard) {
                case 'backpack':
                    if (Auth::guard($guard)->check()) {
                        return redirect(RouteServiceProvider::HOME);
                    }
                    break;

                case 'user':
                    if (Auth::guard($guard)->check()) {
                        return redirect()->route('userToken');
                    }
                    break;
            }

        }

        return $next($request);
    }
}
