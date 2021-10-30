<?php

namespace App\Http\Controllers;

use App\Models\customer;

use App\Models\feedback;
use App\Models\customer_request;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

 

class CustomerApprovalController extends Controller
{

    
     function customer_request(){
        $data= ['loggedUser' =>customer_request::where('id', '=',session('loggedUser'))->first()];
        return view('usermanual.customer_request',$data);
      }

      function customer_request_manual(){
        $data= ['loggedUser' =>customer_request::where('id', '=',session('loggedUser'))->first()];
        return view('usermanual.customer_request_manual',$data);
      }


      
	 public function process_register(Request $request){
           $request->validate([

        'name' => 'required',
        'email' =>'required |email| unique:customers|unique:customer_requests',
        'password' =>'required| min:5|max:12'

    	]);


    	$customer= new customer_request;

    	$customer->name= $request->name;
    	$customer->email= $request->email;
    	
    	$customer->password= \Hash::make($request->password);

    	$save = $customer->save();
    	if($save){
              return back()->with('success','successfully registerd');
    	}
    	else{
    		return back()->with('fail','somthing is wrong');
    	}
    }


   function update_request_profile(Request $request){

    $data= customer_request::where('id', '=',session('loggedUser'))->first();
     
    $data->cont_no= $request->cont;
    $data->post= $request->post;
    $data->thana= $request->thana;
    $data->dist= $request->district;
        

        $save = $data->save();
        if($save){
              return back()->with('success','successfully Upadate');
        }
        else{
            return back()->with('fail','somthing is wrong');
        }

   }


   function customer_request_process(Request $request){
    
             $data= customer_request::where('email', '=',$request->email)->first();
 
             $customer = new customer;
              
             $customer->name= $data->name;
             $customer->email= $data->email;
              
             $customer->password= $data->password;
             $customer->Thana = $data->Thana;
             $customer->cont_no = $data->cont_no;
             $customer->Dist = $data->Dist;
             $customer->post = $data->post;

             $customer->lat = $data->lat;
             $customer->long= $data->long;


             $save=$customer->save();
             $data->delete();
 
             if($save){
                  return back()->with('success','Customer Added Successfully');
             }
             else{
                 return back()->with('fail','somthing is wrong');
             }

   }

   function customer_delete(Request $request){
 
       $data= customer::where('email', '=',$request->email)->first();
     
       $delete= $data->delete();

       if($delete){
         return back()->with('success','Customer Removed!!!!!');
       }
        else{
                 return back()->with('fail','somthing is wrong');
             }
   }

   function customer_request_delete(Request $request){
 
       $data= customer_request::where('email', '=',$request->email)->first();
     
       $delete= $data->delete();

       if($delete){
         return back()->with('success','Customer Removed!!!!!');
       }
        else{
                 return back()->with('fail','somthing is wrong');
             }
   }

   function customer_request_show(Request $request){

     $user = customer_request::where('email','=' , $request->email)->first();
     $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];

     return view('admin.customer_request_show',$data)->with('user', $user);
   }

   function customer_select( ){
        $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];

        return view('admin.customer_select',$data);
   }
}
