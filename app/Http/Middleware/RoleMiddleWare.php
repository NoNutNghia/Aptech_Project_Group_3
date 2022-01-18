<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(Auth::user()->role->role_name == $role) {
            return redirect()->route('articles.create');
        } else {
            return redirect()->route('home');
        }
//        return $next($request);
    }
}
