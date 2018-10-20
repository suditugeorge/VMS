<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsLogedInAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/vms-admin/login');
        }
        $oUser = Auth::user();
        $aUserRole = $oUser->role->toArray();
        if($aUserRole['role_name'] == 'Admin'){
            return $next($request);
        }
        return redirect('/');
    }
}
