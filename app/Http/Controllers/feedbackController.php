<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use App\Models\customer;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function feedbackcontrol(Request $request){

            $data=  customer::where('id', '=',session('loggedUser'))->first() ;

            $feedback = new feedback;
            $feedback->username = $data->name ;
            $feedback->feedback= $request->view;

            $feedback->discrive = $request->comments;
            $feedback->like = 0;


            $save = $feedback->save();
    	if($save){
              return back()->with('success','Thanks for your FeedBack');
    	}
    	else{
    		return back()->with('fail','somthing is wrong');
    	}

    }

    public function feedback_show(){
    	 
     $data =  feedback::orderBy('id')->get();
     
     return view('usermanual.customer_feedback')->with('data', $data);
 
    }


  public  function admin_feedback(){
         $fdback =  feedback::orderBy('id')->get();
        $data= ['loggedUser' =>admin::where('id', '=',session('loggedUser'))->first()];
        return view('admin.feedback',$data)->with('fdback', $fdback);


     }

    public function feedbacklike(Request $request){
         
        return redirect('customer_feedback');

    }

    
}
