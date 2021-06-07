   @extends('customer.CustomerPaymentTemplate')
   @section('content')
<head><title>Recharge</title></head>
   <!-- body  -->
     <div  class="  mr-top-20 bdc">
    <br>
 
   <div class="container">
      <h1>Card Rechage</h1>
   </div>
    <hr>
     <div class="row">
      <div class="col-3"></div>
      <div   class="col-6">
         <img src="{{asset('image/user/bkash.png')}} " ><br>
         <img src="{{asset('image/user/bkash_payment_logo.png')}} " >
         <br><hr>
    <form action ="{{route('sendmoney')}} " method="POST">
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
    <label  >Bkash Number<i style="color: red;">*</i></label>
    <input class="form-control" type ="text" name ="bkash_no"   rows="1" value=" "> 
     <span class="text-danger">@error('bkash_no'){{$message}} @enderror</span>
  </div>
  
  <div class="form-group">
    <label  >TnxID<i style="color: red;">*</i></label>
    <input class="form-control" type ="text" name ="tnxID"   rows="1"> 
     <span class="text-danger">@error('tnxID'){{$message}} @enderror</span>
  </div>

  <div class="form-group">
    <label  >Card Number<i style="color: red;">*</i></label>
    <input class="form-control" type ="number" name ="card_no"   rows="1"> 
     <span class="text-danger">@error('card_no'){{$message}} @enderror</span>
  </div>

   <div class="form-group">
    <label  >PIN<i style="color: red;">*</i></label>
    <input class="form-control" type ="password" name ="pin"   rows="1"> 
     <span class="text-danger">@error('pin'){{$message}} @enderror</span>
  </div>
 

   <div class="form-group">
    <label  >Amount<i style="color: red;">*</i></label>
    <input class="form-control" type="number" name ="amount"   rows="1"> 
     <span class="text-danger">@error('amount'){{$message}} @enderror</span>
  </div>

 

  <div class="form-group" align="right" style=" margin-top: 50px;">
     <BUTTON   type="submit" class="btn btn-success" name="submit" >Submit</BUTTON>
  </div>
</form>
      </div>
      <hr>
   

       <div class="col-3"></div>

</div>
 
 <br>
     <br>
   </div>
     <div>
     <section style="height:50px;"></section>
  <div class="row" style="text-align:center;">
    
  </div>
   @endsection