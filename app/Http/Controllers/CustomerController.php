<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\feedback;
use App\Models\customer_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
     

     public function show_register(){
     	return view('usermanual.registration');
     }

    

    public function proces_log(Request $request){

    	$request->validate([

         
        'email' =>'required |email ',
        'password' =>'required| min:5|max:12'

    	]);

    	$userinfo = customer:: where('email','=', $request->email)->first();
      $data = customer_request::where('email','=', $request->email)->first();
      if($data){
       if(Hash::check($request->password, $data->password)){
             
                $request->session()->put('loggedUser',$data->id);
                return redirect('/customer_request');
        }
        else{
          return  back()->with('fail','incorrect password');
        }
      }
    	if(!$userinfo){
    		return back()->with('fail','we do not recognize your email address');
    	}
    	else{
    		if(Hash::check($request->password, $userinfo->password)){
             
                $request->session()->put('loggedUser',$userinfo->id);
                return redirect('/home');
    		}
    		else{
    			return  back()->with('fail','incorrect password');
    		}
    	}

       
    }

    public function profile(){
       $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
      return view('customer.profile',$data);
       
     }


     public function update(){

      $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
      return view('customer.updateprofile',$data);
     }

     public function change_pin(){
      $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
      return view('customer.ChangePin',$data);

     }

     public function recharge(){

      $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
      return view('customer.recharge',$data);
     }

     public function balance(){

      $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
      return view('customer.balance',$data);
     }

     function feedback () {
     $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
    return view('customer.feedback',$data);
     }

     function payment() {
    $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
    return view('customer.payment',$data);
      }

      function cardrequest(){
        $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
    return view('customer.CardRequest',$data);
      }

    

      
function complain() {
  $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
    return view('customer.complain',$data);
   }


   public function update_profile(Request $request){
    
    $data= customer::where('id', '=',session('loggedUser'))->first();

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

   public function update_password(Request $request){

    $data= customer::where('id', '=',session('loggedUser'))->first();
    
    $request->validate([
         
        'old' =>'required |min:5|max:12 ',
        'new' =>'required |min:5|max:12 ',
        'confirm' =>'required |min:5|max:12 '
      ]);
      
      if(Hash::check($request->old, $data->password)){
       if($request->new != $request->confirm){
          return  back()->with('fail','password not mathcing');
       }
       else {
        $data->password= \Hash::make($request->new);

        $save= $data->save();
        if($save) return back()->with('success','Password Changed');
        else return  back()->with('fail','Something is wrong');
       }
      }
      else {
        return  back()->with('fail','incorrect password');
      }
      

   }


   public function update_image(Request $request){
    
    $data= customer::where('id', '=',session('loggedUser'))->first();

        $path= "image/customer_profile/";
        $data->image=  $path.$request->img  ;
    

        $save = $data->save();
        if($save){
              return back() ;
        }
        else{
            return back() ;
        }
   }

      public function logout(){

      if(session()->has('loggedUser')){
        session()->pull('loggedUser');
        return redirect('LoginCustomer');
      }
    }


    public function added_customer(Request $request){
           $request->validate([

        'name' => 'required',
        'email' =>'required |email| unique:customers',
        'password' =>'required| min:5|max:12'

      ]);


      $customer= new customer;

      $customer->name= $request->name;
      $customer->email= $request->email;
      
      $customer->password= \Hash::make($request->password);
      $customer->cont_no= $request->cont;
      $customer->post= $request->post;
      $customer->Thana= $request->thana;
      $customer->Dist= $request->dist;
      $save = $customer->save();
      if($save){
              return back()->with('success','successfully Added Customer');
      }
      else{
        return back()->with('fail','somthing is wrong');
      }
    }



    
}

     


 