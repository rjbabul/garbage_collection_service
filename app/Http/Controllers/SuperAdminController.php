<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\complain;
use App\Models\map;
use App\Models\superadmin;
use App\Models\feedback;
use App\Models\customer;
use App\Models\CardRecharge;
use App\Models\monthPayment;
use App\Models\customer_request;
use App\Models\driver;

 
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
      public function SuperAdminLogin(Request $request){
        $request->validate([
        
        'email' =>'required |email  ',
        'password' =>'required| min:5|max:12'

      ]);

          $userinfo = superadmin:: where('email','=', $request->email)->first();

      if(!$userinfo){
        return back()->with('fail','we do not recognize your email address');
      }
      else{
        if(Hash::check($request->password, $userinfo->password)){
             
                $request->session()->put('loggedUser',$userinfo->id);
                return redirect('/SuperAdmin_profile');
        }
        else{
          return  back()->with('fail','incorrect password');
        }
      }




     }

     public function SuperAdmin_profile(){
        
        $data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];

     	return view('superadmin.SuperAdmin_profile', $data);
     }
     
     public function Super_customer_list(){
        
        $data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];
        $customer= customer::orderBy('id')->get();
     	return view('superadmin.Super_customer_list', $data)->with('customer', $customer);
     }

     public function adminList(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];
      $admin= admin::orderBy('id')->get();
     	return view('superadmin.adminList',$data)->with('admin', $admin);
     }

     public function user_profile_admin(Request $email){
        $data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];

        $dt =admin::where('email' , '=', $email->email)->first(); 
        
         return view('superadmin.user_profile_admin',$data)->with('user',$dt); 
     }


     public function remove_admin(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];
      
       $request = admin::orderBy('id')->get();
        
        
     	return view('superadmin.remove_admin',$data)->with('request',$request);
     }

     public function admin_delete(Request $request){
       
        $data= admin::where('email','=', $request->email)->first();
        $delete= $data->delete();

        if($delete){
              return back()->with('success','successfully Removed!!');
        }
        else{
            return back()->with('fail','somthing is wrong');
        }

     }

      public function add_admin(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];

     	return view('superadmin.add_admin',$data);
     }

     public function AddeAdmin(Request $request){
        $request->validate([

        'name' => 'required',
        'email' =>'required |email| unique:drivers',
        'password' =>'required| min:5|max:12'

      ]);


        $admin = new admin; 

        $admin->name= $request->name;
        $admin->email= $request->email;
      
      $admin->password= \Hash::make($request->password);
      $admin->cont_no= $request->cont;
       
      $admin->zone= $request->area;
      $admin->rank= $request->rank;
      $save = $admin->save();

      if($save){
              return back()->with('success','successfully Added Admin');
      }
      else{
        return back()->with('fail','somthing is wrong');
      }


     }

     public function Super_driver_list(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];
      $driver= driver::orderBy('id')->get();
     	return view('superadmin.Super_driver_list',$data)->with('driver', $driver);
     }

     public function super_customer_complain(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];
        $fdback =  complain::orderBy('id')->get();
       
     	return view('superadmin.super_customer_complain',$data)->with('fdback', $fdback);
     }

      public function Super_admin_feedback(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];
         $fdback =  feedback::orderBy('id')->get();
     	return view('superadmin.Super_admin_feedback',$data)->with('fdback', $fdback);
     }
 
      public function SuperAdmin_desboard(){
     	$data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
       $payment = monthPayment::where('id','=','1')->first();
       $customerRequest= customer_request::orderBy('id')->get();
       $recharge= CardRecharge::orderBy('id')->get();
      return view('superadmin.SuperAdmin_desboard',$data)->with(compact([ 'payment' ,'customerRequest' ,'recharge'  ]));
     }


      public function superadmin_garbage_status(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];

     	return view('superadmin.superadmin_garbage_status',$data);
     }


      public function superadmin_update_profile(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];

     	return view('superadmin.superadmin_update_profile',$data);
     }

     public function superadmin_password_reset(){
     	$data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()];

     	return view('superadmin.superadmin_password_reset',$data);
     }

     public function SuperAdmin_userProfile( Request $email)
     {

  
           $dt =customer::where('email' , '=', $email->email)->first();
          
           $data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()]; 

          //return view('admin.user_profile',$data)->with('email',$email);
         return view('superadmin.SuperAdmin_userProfile',$data)->with('user',$dt);
     }


     public function SuperAdmin_driverprofile( Request $email){

       $data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()]; 
       $dt =driver::where('email' , '=', $email->email)->first(); 
        
         return view('superadmin.SuperAdmin_driverprofile',$data)->with('user',$dt); 
     }

     public function superadmin_password_update(Request $request){

      $data= superadmin::where('id', '=',session('loggedUser'))->first();
    
       $request->validate([
         
        'old' =>'required |min:5|max:12 ',
        'new' =>'required |min:5|max:12 ',
        'confirm' =>'required |min:5|max:12 '
      ]);
      
      
      if(Hash::check($request->old, $data->password)){


       if($request->new != $request->confirm){
          return  back()->with('fail','password not mathcing');
       }
        else{

          if( $request->new ==  $request->old) 
          {
          return  back()->with('fail','You dont use old password!!!');
           }

       else {
        $data->password= \Hash::make($request->new);

        $save= $data->save();
        if($save) return back()->with('success','Password Changed');
        else return  back()->with('fail','Something is wrong');
       }

        }
      }
      else {
        return  back()->with('fail','incorrect password');
      }

     }

  

}
