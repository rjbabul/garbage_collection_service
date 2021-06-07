<?php

namespace App\Http\Controllers;
 
use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\feedback;
use App\Models\customer;
use App\Models\customer_request;
use App\Models\driver;
use Illuminate\Support\Facades\Hash;

class admincontroller extends Controller
{
      public function proces_log(Request $request){

    	$request->validate([

         
        'email' =>'required |email  ',
        'password' =>'required| min:5|max:12'

    	]);

    	$userinfo = admin:: where('email','=', $request->email)->first();

    	if(!$userinfo){
    		return back()->with('fail','we do not recognize your email address');
    	}
    	else{
    		if(Hash::check($request->password, $userinfo->password)){
             
                $request->session()->put('loggedUser',$userinfo->id);
                return redirect('/admin_profile');
    		}
    		else{
    			return  back()->with('fail','incorrect password');
    		}
    	}

       
    }

// Profile
    public function profile(){
       $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
      return view('admin.admin_profile',$data);
       
     }

     public function desboard(){
       $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
      return view('admin.desboard',$data);
       
     }

     function admin_feedback(){
        $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
     }
     

   

     public function customers_list(){

      $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
      $customer= customer::orderBy('id')->get();

      return view('admin.customer_list',$data)->with('customer', $customer);
     }

      public function driver_list(){

      $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
      $driver= driver::orderBy('id')->get();

      return view('admin.driver_list',$data)->with('driver', $driver);
     }


    public function request_pendin(){
      
      $request = customer_request::orderBy('id')->get();
      $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];

      return view('admin.customer_request', $data)->with('request',$request);
    }

    public function add_customer(){
       $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
        
        return view('admin.add_customer', $data);
    }

    public function remove_customer(){
       $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
       $request = customer::orderBy('id')->get();
        
        return view('admin.remove_customer', $data)->with('request',$request);
    }


       public function add_driver(){
       $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
       return view('admin.add_driver', $data);
    }

      public function remove_driver(){
       $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
       $request = driver::orderBy('id')->get();
        
        return view('admin.remove_driver', $data)->with('request',$request);
    }



     
     public function logout(){

      if(session()->has('loggedUser')){
        session()->pull('loggedUser');
        return redirect('LoginAdmin');
      }
    }
}
