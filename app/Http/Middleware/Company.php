<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Company
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
        if(Auth::user()){

            if (!Auth::user()->company) {
                
                return redirect()->back();
            }
            return $next($request);

        }else{

            return redirect()->back();
        }
    }
}
