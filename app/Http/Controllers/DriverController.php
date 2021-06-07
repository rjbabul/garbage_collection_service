<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driver;
use Illuminate\Support\Facades\Hash;
class DriverController extends Controller
{
     public function added_driver(Request $request){
         $request->validate([

        'name' => 'required',
        'email' =>'required |email| unique:customers',
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
