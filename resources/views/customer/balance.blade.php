   @extends('customer.CustomerPaymentTemplate')
   @section('content')
<head><title>Balance</title></head>
     <div  class="  mr-top-20 bdc">
    <br>
    <!-- body  -->
     
       <div class="container"  style="width: 600px; margin: auto;">
      <h1 style="color: gray; width: bold; "  >Check Balance</h1>
         <hr>
       <form action ="{{route('checkbalance')}} " method="POST">
    @if(Session::get('success'))
           <div class="alert alert-success">
            {{ Session::get('success')}}
        @endif

         @if(Session::get('fail'))
           <div class="alert alert-danger">
            {{ Session::get('fail')}}
        @endif


        @csrf
  
  
  
  <div class="form-group">
    <label  >Card Number</label>
    <input class="form-control" type ="number" name ="card_no"   rows="1"> 
  </div>

   <div class="form-group">
    <label  >Pin Number</label>
    <input class="form-control" type="password" name ="pin"   rows="1"> 
  </div>

   
 

  <div class="form-group" align="right" style=" margin-top: 50px;">
     <BUTTON type="submit" class="btn btn-success" name="submit">Check Balance</BUTTON>
  </div>
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