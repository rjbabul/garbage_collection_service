<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\customer_request;
use App\Models\map;
use Illuminate\Support\Facades\Hash;

class mapController extends Controller
{
    public function update_customer_location(Request $request){
     $data= customer_request::where('id', '=',session('loggedUser'))->first();



     $mp = map::where('username','=', $data->email)->first();

     if($mp) $marker = map::where('username','=', $data->email)->first();
     else 
     $marker = new  map; 
   
     $data->lat= $request->let;
     $data->long= $request->long;
 
       $save = $data->save();

        if($save){
              return back()->with('success','successfully Upadate');
        }
        else{
            return back()->with('fail','somthing is wrong');
        }

      
}

public function reset(){

    $marker = map::orderBy('id')->get();

    foreach($marker as $mar) {
    $mar->description = 'red';
    $mar->save();
   }
    
    return back()->with('success','successfully reset');
}

public function collect(Request $request){

    $data= map::where('username','=', $request->email)->first();

    $data->description="green";
    $data->save();

    return back();
}



}
