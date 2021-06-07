<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\admin;
use Illuminate\Http\Request;


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
}
