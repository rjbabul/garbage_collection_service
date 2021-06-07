 @extends('customer.CustomerPaymentTemplate')
   @section('content')
<head><title>Check Balance</title></head>
     <div  class="  mr-top-20 bdc">
    <br>
    <!-- body  -->
     
       <div class="container"  style="width: 600px; margin: auto;">
      <h1 style="color: gray; width: bold; "  >Balance Information</h1>
         <hr>
        <div class="col-sm-6">
            <b class="m-b-10 f-w-600">Card Number : </b>
            <b   style="color:blue;">{{ $card->card_no }} </b>
            </div>
           
              <div class="col-sm-6">
            <b class="m-b-10 f-w-600">Balance : </b>
            <b   style="color:blue;">{{ $card->balance }} Tk.</b>
            </div>
        <hr>
     </div>

 
     <!-- footer  -->
     <br>
     <br>
   </div>
     <div>
     <section style="height:50px;"></section>
  <div class="row" style="text-align:center;">
    
  </div>
    <!----------- Footer ------------>
    @endsection