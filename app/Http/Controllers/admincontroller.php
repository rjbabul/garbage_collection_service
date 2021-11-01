<?php

namespace App\Http\Controllers;
 
use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\feedback;
use App\Models\customer;
use App\Models\customer_request;
use App\Models\driver;
use App\Models\map;
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

    public function update_general_info(Request $request){
      $data= admin::where('id', '=',session('loggedUser'))->first();
       if($request->name){
        $data->name= $request->name;
       }
       if($request->email){
        $data->email= $request->email;
       }
       if($request->cont_no){
        $data->cont_no= $request->cont_no;
       }

          $save = $data->save();
        if($save){
              return back()->with('success','successfully Upadate');
        }
        else{
            return back()->with('fail','somthing is wrong');
        }
    }

     public function update_formal_info(Request $request){
       $data= admin::where('id', '=',session('loggedUser'))->first();
       if($request->zone){
        $data->zone= $request->zone;
       }
       if($request->rank){
        $data->rank= $request->rank;
       }
      

          $save = $data->save();
        if($save){
              return back()->with('success','successfully Upadate');
        }
        else{
            return back()->with('fail','somthing is wrong');
        }

    }

    public function update_address(Request $request){
       $data= admin::where('id', '=',session('loggedUser'))->first();

       if($request->post){
        $data->post= $request->post;
       }
       if($request->Thana){
        $data->Thana= $request->Thana;
       }
        if($request->Dist){
        $data->Dist= $request->Dist;
       }

          $save = $data->save();
        if($save){
              return back()->with('success','successfully Upadate');
        }
        else{
            return back()->with('fail','somthing is wrong');
        }

    }

    public function update_image_admin(Request $request){
       $data= admin::where('id', '=',session('loggedUser'))->first();


         $path= "image/customer_profile/";
         $data->image=  $path.$request->img  ;
       
          $save = $data->save();
        if($save){
              return back()->with('success','successfully Upadate');
        }
        else{
            return back()->with('fail','somthing is wrong');
        }

    }

    public function update_password_admin_(Request $request){


       $data= admin::where('id', '=',session('loggedUser'))->first();
    
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

    


// Profile
    public function profile(){
       $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
      return view('admin.admin_profile',$data);
       
     }
       
      public function update_profile(){
      $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
      return view('admin.update_profile',$data);
       
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

    public function password_rest(){

      $data= ['loggedUser'=> admin::where('id', '=', session('loggedUser'))->first()];

      return view('admin.password_reset',$data);
    }



     
     public function logout(){

      if(session()->has('loggedUser')){
        session()->pull('loggedUser');
        return redirect('LoginAdmin');
      }
    }

    public function update_driver_info( Request $email){


      $data= ['loggedUser'=> admin::where('id', '=', session('loggedUser'))->first()];

        $count=0;
            for ($x = 24; $x < strlen($email); $x++) {
              if( substr($email, $x, 4)==".com"){
                $count= $count+4;
                break;
              }
              $count++;
            }
           

           $ds= substr($email,24,$count);
          
           $dt =driver::where('email' , '=', $ds)->first();
           
      return view('admin.update_driver_info',$data)->with('user', $dt);
    }

    public function reset_collection(){
      $data= ['loggedUser'=> admin::where('id', '=', session('loggedUser'))->first()];
      return view('admin.reset_collection',$data);
    }

    public function garbage_status(){
      $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
      
     $d = admin::where ('id', '=', session('loggedUser'))->first();
      

     
     
    $location= map::where('username', '=' ,  $d->email)->first();

    $marker = map::orderBy('id')->get();
     
      // return view('category.index', compact(['categories', 'products']));
    return view('admin.garbage_status', $data)->with(compact(['data','location','marker']));
       
    }
}
