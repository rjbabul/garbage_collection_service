<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class visitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('loggedUser') && ($request->path()=='/' || $request->path()=='LoginCustomer' || $request->path()=='LoginAdmin' || $request->path()=='LoginDriver' || $request->path()=='LoginSuperadmin' ||  $request->path()=='contact' || $request->path()=='customer_feedback' || $request->path()=='registration'  )){

            return back();
        }
        

       else return $next($request);
    }
}
