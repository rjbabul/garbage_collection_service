      <link rel="stylesheet" href= {{asset('css/stylefeed.css')}} >@extends('customer.CustomerPageTemplate')
   @section('content')
<head><title>FeedBack</title></head>
     <div  class="  mr-top-20 bdc">
    <br>
    <!-- body  -->
       
     
       <h1 class="agile_head text-center">Feedback Form</h1>
     }
     }
     
    <div class="w3layouts_main wrap">
    <h4>Customer FeedBack</h4>
     <hr>
      <form action=" {{route('feedbackcontrol')}}" method="post" class="agile_form">
       @if(Session::get('success'))
           <div class="alert alert-success">
            {{ Session::get('success')}}
        @endif

         @if(Session::get('fail'))
           <div class="alert alert-danger">
            {{ Session::get('fail')}}
        @endif


        @csrf

      <h2>How satisfied were you with our Service?</h2>
       <ul class="agile_info_select">


         <li><input type="radio" name="view" value="excellent" id="excellent" required> 
            <label for="excellent">excellent</label>
              <div class="check w3"></div>
         </li>
         <li><input type="radio" name="view" value="good" id="good"> 
            <label for="good"> good</label>
              <div class="check w3ls"></div>
         </li>
         <li><input type="radio" name="view" value="neutral" id="neutral">
           <label for="neutral">neutral</label>
             <div class="check wthree"></div>
         </li>
         <li><input type="radio" name="view" value="poor" id="poor"> 
            <label for="poor">poor</label>
              <div class="check w3_agileits"></div>
         </li>
       </ul>    
      <h2>If you have specific feedback, please write to us...</h2>
      <textarea placeholder="Additional comments" class="w3l_summary" name="comments"></textarea><br>
      
      <center><input type="submit" value="submit Feedback" class="agileinfo" /></center>
    </form>
  </div>

 
     <!-- footer  -->
     <br>
     <br>
   </div>
     <div>
     <section style="height:50px;"></section>
  <div class="row" style="text-align:center;">
    
  </div>
   @endsection