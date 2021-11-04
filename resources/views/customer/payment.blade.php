   @extends('customer.CustomerPaymentTemplate')
   @section('content')
   <head><title>Payment</title></head>
   
 <!-- body  -->
     <div  class="  mr-top-20 bdc">
    <br>
    
     
   
    <div class="container"  style="width: 600px; margin: auto;">
      <h1 style="color: gray; width: bold; "  >Bill Payment</h1>
         <hr>
       <form action ="{{route('payment')}} " method="POST">
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
    <label for="exampleFormControlSelect1">Month</label>
    <select class="form-control" id="exampleFormControlSelect1" name="months">
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select>
  </div>
  
  
  <div class="form-group">
    <label  >Card Number</label>
    <input class="form-control" type ="number" name ="card_no"   rows="1"> 
  </div>

   <div class="form-group">
    <label  >Pin Number</label>
    <input class="form-control" type="password" name ="pin"   rows="1"> 
  </div>

   <div class="form-group">
    <label  >Amount</label>
    <input class="form-control" type="number" name ="amount"   rows="1"> 
  </div>

 

  <div class="form-group" align="right" style=" margin-top: 50px;">
     <BUTTON   type="submit" class="btn btn-success" name="Payment" >Payment</BUTTON>
  </div>
</form>
     </div>

 
    <br>
     <br>
   </div>
     <div>
     <section style="height:50px;"></section>
  <div class="row" style="text-align:center;">
    
  </div>
    <!----------- Footer ------------>
   @endsection