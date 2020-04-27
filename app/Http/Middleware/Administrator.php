<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\User;

class Administrator
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
        // dd($request);
        if(!Auth::check()){
            return redirect('/admin/login');
        }

        if(Auth::user()->role ==3){
            return redirect('/admin/logout')->with('alert', 'Permission denide!');
        }

        return $next($request);
    }
}
