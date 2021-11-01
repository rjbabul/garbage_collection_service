<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authAdmin
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
       if(!session()->has('loggedUser') && ($request->path()=='admin_profile' || $request->path()=='desboard' || $request->path()=='customer_complain' || $request->path()=='admin_feedback' || $request->path()=='admin_notification' || $request->path()=='admin_massage' || $request->path()=='request_pendin' || $request->path()=='card_rechage' || $request->path()=='customers_list' || $request->path()=='driver_list' || $request->path()=='user_profile' || $request->path()=='admin_logout' || $request->path()=='add_customer'||  $request->path()=='remove_customer' || $request->path()=='add_driver'||  $request->path()=='remove_driver' || $request->path()=='card_request' || $request->path()=='update_profile' || $request->path()=='password_reset' || $request->path()=='user_profile_driver' || $request->path()=='customer_select' || $request->path()=='update_driver_info' || $request->path()=='reset_collection' || $request->path()=='garbage_status')){

            return redirect('LoginAdmin')->with('fail','You must log in');
        }
        if(session()->has('loggedUser') && ($request->path()!='admin_profile' && $request->path()!='desboard' && $request->path()!='customer_complain' && $request->path()!='admin_feedback' && $request->path()!='admin_notification' && $request->path()!='admin_massage' && $request->path()!='request_pendin' && $request->path()!='card_rechage' && $request->path()!='customers_list' && $request->path()!='driver_list' && $request->path()!='user_profile' && $request->path()!='admin_logout' && $request->path()!='add_customer'&&  $request->path()!='remove_customer' && $request->path()!='add_driver'&&  $request->path()!='remove_driver' && $request->path()!='card_request' && $request->path()!='update_profile' && $request->path()!='password_reset' && $request->path()!='user_profile_driver' && $request->path()!='customer_select' && $request->path()!='update_driver_info'  &&  $request->path()!='reset_collection' && $request->path()!='garbage_status')){
            return back();
        }
        return $next($request);
    }
}
