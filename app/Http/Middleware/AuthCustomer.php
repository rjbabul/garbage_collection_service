<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCustomer
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
        if(!session()->has('loggedUser') && ($request->path()=='home' || $request->path()=='update' || $request->path()=='complain' || $request->path()=='payment' || $request->path()=='location' ||  $request->path()=='recharge' || $request->path()=='feedback' || $request->path()=='balance' || $request->path()=='chechbalance' || $request->path()=='customer_request' )){

            return redirect('LoginCustomer')->with('fail','You must log in');
        }
         if(session()->has('loggedUser') && ($request->path()!='home' && $request->path()!='update' && $request->path()!='complain' && $request->path()!='payment' && $request->path()!='location' && $request->path()!='recharge' && $request->path()!='feedback' && $request->path()!='balance'  && $request->path()!='checkbalance' && $request!='customer_request' )){

            return back();
        }
        return $next($request);
    }
}
