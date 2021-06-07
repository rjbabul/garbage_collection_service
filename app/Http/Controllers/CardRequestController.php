<?php

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Hash;
use App\Models\card;
use App\Models\CardRequest;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\admin;

class CardRequestController extends Controller
{
     public function card_request_delete(Request $request){
        
        $data = CardRequest::where('username', '=' , $request->email)->first();

        $delete = $data->delete();
        
         if($delete){
                  return back()->with('success','Deleted request !!!!');
             }
             else{
                 return back()->with('fail','somthing is wrong');
             }


    }
    public function card_request_deletes(Request $request){
        
        $data = CardRequest::where('username', '=' , $request->email)->first();

        $delete = $data->delete();
        
         if($delete){
                  return back()->with('success','Deleted request !!!!');
             }
             else{
                 return back()->with('fail','somthing is wrong');
             }

    }

    /// Admin pannel
     function cardrequestprocess(Request $request){

         $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
         
         $request = CardRequest::where ('username','=', $request->email)->get();
          
        return view('admin.CardRequestshow',$data)->with('request',$request);
    }


      function cardrequest(Request $request)
    {
         
         $request->validate([

        'bkash_no' => 'required',
        'tnxID' =>'required',
         
        ]);
 
        

         $data=  customer::where('id', '=',session('loggedUser'))->first();
         
           

         $check = CardRequest:: where ('username' , '=', $data->email)->first();
         $check2 = card:: where ('username' , '=', $data->email)->first();
         
         if($check || $check2){
             return back()->with('fail','SORRY!! Just One Card allowed For Each Customer');
         }

         $requ = new CardRequest;
         


         $requ->username= $data->email;
         $requ->name= $data->name;
         $requ->BkashNo= $request->bkash_no; 
         $requ->TnxID= $request->tnxID; 
         $requ->amount= 100; 
         $requ->cont_no= $data->cont_no; 
         $requ->post= $data->post; 
         $requ->thana= $data->Thana; 
         $requ->dist= $data->Dist; 

 
         $save=$requ->save();

         if($save){
             return back()->with('success','Request Send Successfully, Please wait for   Card proccessing');
         }
         else{
            return back()->with('fail','somthing is wrong');
         }

    
    }

    public function card_request_accept(Request $request){
         
         
           $ran=rand(10000000,99999999);
           $dat = new card ;

           $dat->username = $request->email;
           $dat->card_no = $ran ;
           $dat->password="123456" ;
           $dat->balance = 0;

          $check = CardRequest:: where ('username' , '=', $request->email)->first();

         $delete = $check->delete();
          $save = $dat->save();

          if($save  ){

            $request = CardRequest::orderBy('id')->get();
            $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];

           return view('admin.CardRequest',$data)->with('request',$request)->with('success','Card Request Accepted'); 

        
          }
    }
}
