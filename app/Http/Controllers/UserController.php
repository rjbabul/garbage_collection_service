<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\admin;
use App\Models\driver;
use Illuminate\Http\Request;
use App\Models\superadmin;


class UserController extends Controller
{
    public function user_profile(Request   $email)
    {
    	  


    	 // $email = str_replace("_", ".", $email);
    	  
    	    $count=0;
			for ($x = 18; $x < strlen($email); $x++) {
			  if( substr($email, $x, 4)==".com"){
			  	$count= $count+4;
			  	break;
			  }
			  $count++;
			}
     

           $ds= substr($email,18,$count);

           $dt =customer::where('email' , '=', $ds)->first();

    	   $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()]; 

    	  //return view('admin.user_profile',$data)->with('email',$email);
         return view('admin.user_profile',$data)->with('user',$dt);
    }

     public function super_user_profile(Request   $email)
    {
        

  
       // $email = str_replace("_", ".", $email);
        
          $count=0;
      for ($x = 24; $x < strlen($email); $x++) {
        if( substr($email, $x, 4)==".com"){
          $count= $count+4;
          break;
        }
        $count++;
      }
     

           $ds= substr($email,24,$count);

           $dt =customer::where('email' , '=', $ds)->first();
      // return $ds;
         $data= ['loggedUser' =>superadmin::where('id', '=',session('loggedUser'))->first()]; 

        //return view('admin.user_profile',$data)->with('email',$email);
         return view('superadmin.SuperAdmin_userProfile',$data)->with('user',$dt);
    }


    public function user_profile_driver(Request   $email)
    {
          


         // $email = str_replace("_", ".", $email);
          
            $count=0;
            for ($x = 25; $x < strlen($email); $x++) {
              if( substr($email, $x, 4)==".com"){
                $count= $count+4;
                break;
              }
              $count++;
            }
           

           $ds= substr($email,25,$count);
            
           $dt =driver::where('email' , '=', $ds)->first();

           $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()]; 

          //return view('admin.user_profile',$data)->with('email',$email);
         return view('admin.user_profile_driver',$data)->with('user',$dt);
    }



}
