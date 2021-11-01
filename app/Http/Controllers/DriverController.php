<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driver;
use App\Models\map;
use Illuminate\Support\Facades\Hash;
class DriverController extends Controller
{
     public function driverlogin(Request $request){
        $request->validate([

         
        'email' =>'required |email  ',
        'password' =>'required| min:5|max:12'

      ]);

          $userinfo = driver:: where('email','=', $request->email)->first();

      if(!$userinfo){
        return back()->with('fail','we do not recognize your email address');
      }
      else{
        if(Hash::check($request->password, $userinfo->password)){
             
                $request->session()->put('loggedUser',$userinfo->id);
                return redirect('/driver_profile');
        }
        else{
          return  back()->with('fail','incorrect password');
        }
      }




     }

     public function driver_profile(){
       $data= ['loggedUser' =>driver::where('id', '=',session('loggedUser'))->first()];
       return view('driver.driver_profile',$data);
     }


     public function added_driver(Request $request){


         $request->validate([

        'name' => 'required',
        'email' =>'required |email| unique:drivers',
        'password' =>'required| min:5|max:12'

      ]);

  
      $driver= new driver;

      $driver->name= $request->name;
      $driver->email= $request->email;
      
      $driver->password= \Hash::make($request->password);
      $driver->cont_no= $request->cont;
      $driver->bus_no= $request->busno;
      $driver->area= $request->area;
      $driver->rank= $request->rank;
      $save = $driver->save();

      if($save){
              return back()->with('success','successfully Added Driver');
      }
      else{
        return back()->with('fail','somthing is wrong');
      }

     }

     public function driver_update_profile(){
      $data= ['loggedUser' =>driver::where('id', '=',session('loggedUser'))->first()];

      return view('driver.driver_update_profile',$data);
     }

     public function deriver_update_image(Request $request){
      
      $data= driver::where('id', '=', session('loggedUser'))->first();
       $path= "image/customer_profile/";
        $data->image=  $path.$request->img;
    
        $save = $data->save();
         if($save){
              return back()->with('success','successfully Added Image');
      }
      else{
        return back()->with('fail','somthing is wrong');
      }
      

     }

     public function driverUpdateProfile(Request $request){
     
      //return $request->all();
      $data = driver::where('id','=',session('loggedUser'))->first();

      $data->cont_no= $request->cont;
      $data->post = $request->post;
      $data->thana= $request->thana;
      $data->zila= $request->district;
      $save = $data->save();
         if($save){
              return back()->with('success','successfully Profile Updated');
      }
      else{
        return back()->with('fail','somthing is wrong');
      }


     }

     public function driver_password_change(){

      $data= ['loggedUser' =>driver::where('id', '=',session('loggedUser'))->first()];
      return view('driver.password_change', $data);
     }


     public function driver_update_password(Request $request){

       $data= driver::where('id', '=',session('loggedUser'))->first();
    
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


     public function updateDriverProfile( Request $request){

      $data = driver::where('email','=', $request->email)->first();
      $data->bus_no =$request->busno;
      $data->area=$request->area;
      $data->rank= $request->rank;
     
      $save=$data->save();
        if($save) return back()->with('success','Information Changed');
        else return  back()->with('fail','Something is wrong');
      

     }

     public function viewroute(){

     $data= ['loggedUser' =>driver::where('id', '=',session('loggedUser'))->first()];

      return view('driver.viewroute',$data);
     }

      public function drivercollect_waste(){
         $data= ['loggedUser' =>driver::where('id', '=',session('loggedUser'))->first()];
      
     $d = driver::where ('id', '=', session('loggedUser'))->first();
      

     
     
    $location= map::where('username', '=' ,  $d->email)->first();

    $marker = map::orderBy('id')->get();

     

      return view('driver.collect_waste',$data)->with(compact(['data','location','marker']));
     }
}
