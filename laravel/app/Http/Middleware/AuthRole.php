<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  \Role  $role
     * @return mixed
     * on route Route::post('url', 'Controller@method')->middleware('AuthRole:SUP,MKT');
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $this->Auth = new \Auth();
        $this->Config = new \Config();
        if (!in_array($this->Auth::user()->roleCode, $roles)) return Redirect::to('/');
        return $next($request);
    }
}