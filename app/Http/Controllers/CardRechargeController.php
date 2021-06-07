<?php

namespace App\Http\Controllers;

use App\Models\CardRecharge;
use Illuminate\Support\Facades\Hash;
use App\Models\card;
use App\Models\admin;
use App\Models\CardRequest;
use Illuminate\Http\Request;
use App\Models\customer;

class CardRechargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function sendmoney(Request $request)
    {
         
         $request->validate([

        'bkash_no' => 'required',
        'tnxID' =>'required',
        'pin' =>'required',
        'card_no' =>'required',
        'amount' =>'required'
        ]);
 
          $cards= card::where('card_no' , '=',  $request->card_no )->first();

           //Hash::check($request->password, $data->password)
         if(!$cards){
            return back()->with('fail','Card Number is wrong');
         }
         else if(   $cards->password != $request->pin){
            return back()->with('fail','Password is incorrect');
         }


         $recharge = new CardRecharge ;

         $recharge->bkash_no = $request->bkash_no;
         $recharge->tnxID = $request->tnxID;
         $recharge->card_no = $request->card_no;
         $recharge->amount = $request->amount;

         $save=$recharge->save();

         if($save){
             return back()->with('success','Send Successfully, Please wait for Complete recharge proccessing');
         }
         else{
            return back()->with('fail','somthing is wrong');
         }

    
    }

    public function card_recharge(){

         $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
         
         $request = CardRecharge::orderBy('id')->get();

        return view('admin.card_recharge',$data)->with('request',$request);
    }

    public function recharge_req(Request $request){
              
             $data= card::where('card_no', '=',$request->card_no)->first();
             $pay = CardRecharge::where('card_no', '=', $request->card_no)->first();
             
             $data->balance = $pay->amount  + $data->balance;

             $save=$data->save();
             $pay->delete();

             if($save){
                  return back()->with('success','Send Successfully, Payment Added Successfully');
             }
             else{
                 return back()->with('fail','somthing is wrong');
             }
    }
     public function recharge_req_delete(Request $request){
              
             $pay = CardRecharge::where('card_no', '=', $request->card_no)->first();
             $delete= $pay->delete();

             if($delete){
                  return back()->with('success','Deleted request !!!!');
             }
             else{
                 return back()->with('fail','somthing is wrong');
             }
    }


// --------------Card Request ---------

   


    //------- Get Card Request Admin --------
    
    function card_request(){

         $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
         
         $request = CardRequest::orderBy('id')->get();

        return view('admin.CardRequest',$data)->with('request',$request);
    }

     




    

     
}
