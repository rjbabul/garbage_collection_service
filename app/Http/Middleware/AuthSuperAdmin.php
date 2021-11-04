<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthSuperAdmin
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
         if(!session()->has('loggedUser') && ($request->path()=='SuperAdmin_profile' || $request->path()=='Super_customer_list' || $request->path()=='adminList' || $request->path()=='remove_admin'  || $request->path()=='add_admin' || $request->path()=='Super_driver_list' || $request->path()=='super_customer_complain' || $request->path()=='Super_admin_feedback' || $request->path()=='SuperAdmin_desboard' || $request->path()=='superadmin_garbage_status'  || $request->path()=='superadmin_update_profile'  || $request->path()=='superadmin_password_reset' || $request->path()=='SuperAdmin_userProfile'  || $request->path()=='SuperAdmin_driver_profile')){

            return redirect('LoginSuperadmin')->with('fail','You must log in');
        }
        if(session()->has('loggedUser') && ($request->path()!='SuperAdmin_profile' && $request->path()!='Super_customer_list' && $request->path()!='adminList'  && $request->path()!='remove_admin'  && $request->path()!='add_admin' && $request->path()!='Super_driver_list'  && $request->path()!='super_customer_complain'  && $request->path()!='Super_admin_feedback' && $request->path()!='SuperAdmin_desboard'  && $request->path()!='superadmin_garbage_status' && $request->path()!='superadmin_update_profile' && $request->path()!='superadmin_password_reset'   && $request->path()!='SuperAdmin_userProfile'   && $request->path()!='SuperAdmin_driver_profile' )){
            return back(); //SuperAdmin_driver_profile
        }
         
        return $next($request);
    }
}
