<?php

namespace App\Http\Controllers;
use App\Models\complain;
use App\Models\customer;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class complainController extends Controller
{
   public function complain(Request $request){

            $data=  customer::where('id', '=',session('loggedUser'))->first() ;

            $complain = new complain;
            $complain->name = $data->name ;
             $complain->email = $data->email;
            $complain->type= $request->catagory;

            $complain->complain = $request->complain;
            


            $save = $complain->save();
    	if($save){
              return back()->with('success','Thanks for your Complain');
    	}
    	else{
    		return back()->with('fail','somthing is wrong');
    	}

    }


    public function user_complain(){
         $fdback =  complain::orderBy('id')->get();
        $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
        return view('admin.complain',$data)->with('fdback', $fdback);
    }
}
