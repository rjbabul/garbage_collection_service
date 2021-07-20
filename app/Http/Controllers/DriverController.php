<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driver;
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
}
