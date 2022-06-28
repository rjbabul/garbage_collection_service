<?php

namespace App\Http\Controllers;
use App\Models\payment;
use App\Models\customer;
use App\Models\card;
use App\Models\monthPayment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function payment(Request $request){
    	$data=  customer::where('id', '=',session('loggedUser'))->first() ;
        $cards= card::where('card_no' , '=',  $request->card_no  )->first();
         if(!$cards){
            return back()->with('fail','Card Number is wrong');
         }
         else if(   $cards->password != $request->pin){
            return back()->with('fail','Password is incorrect');
         }
         else if( $cards->balance< $request->amount){
         	return back()->with('fail','Insufficient Balance');
         }
         else if( $cards->balance<0){
            return back()->with('fail','wrong input  Balance');
         }
         else{
            
            $cards->balance = $cards->balance - $request->amount;

            $cards->save();
         	$payment = new payment;

            $tk =  monthPayment::where('id','=','1')->first();
           
            $td=$request->months;
            
            


            $tk->$td= $tk->$td+ $request->amount;

            $tk->save();
             
            $save = $cards->save();

         	$payment->name= $data->name;
         	$payment->email= $data->email;
         	$payment->cont_no = $data->cont_no;
         	$payment->month= $request->months;
         	$payment->amount = $request->amount;
         	 $save = $payment->save();
         	 

         	  if($save){
              return back()->with('success','Payment Successfull');
    	}
    	else{
    		return back()->with('fail','somthing is wrong');
    	}

            
         }
        

    }

    function checkbalance(Request $request){
         $card= card::where('card_no' , '=',  $request->card_no  )->first();
         if(!$card){
            return back()->with('fail','Card Number is wrong');
         }
         else if(   $card->password != $request->pin){
            return back()->with('fail','Password is incorrect');
         }
         else{
              return view('customer.checkBalance')->with('card', $card);
              
         }
    }


    
}
