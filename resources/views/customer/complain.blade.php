 @extends('customer.CustomerPageTemplate')
   @section('content')
<head><title>Complain</title></head>
     <div  class="  mr-top-20 bdc">
    <br>
    <!-- body  -->
     
 

     <div class="container"  style="width: 600px; margin: auto;">
      <h4>Customer Complain</h4>
      <hr>
       <form action ="{{route('complaind')}} " method="POST">
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
    <label for="exampleFormControlSelect1">Catagory</label>
    <select class="form-control" id="exampleFormControlSelect1" name="catagory">
      <option>Servicing</option>
      <option>Waste collect issue</option>
      <option>Driver behavior</option>
      <option>Payment Issue</option>
      <option>Others</option>
    </select>
  </div>
  
  
  <div class="form-group">
    <label  >Write Your Complain</label>
    <textarea class="form-control" name ="complain"   rows="3"></textarea>
  </div>
  <div class="form-group" align="right" style="margin-top: 50px;">
     <input type="submit" class="btn btn-success" name="submit">
  </div>
</form>
     </div>

 
     <!-- footer  -->
     @endsection