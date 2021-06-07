 @extends('usermanual.pagetemplate')

@section('content')

     <div  class="  mr-top-20 bdc">
    <br>
    <!-- body  -->
     <div class="row" style="margin-left: 20px;">
      <div class="col-4 d" >

        <h4>Our privary policy</h4>

        <ul style="list-style-type:square;">
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
          </ul>

      </div>
<div class="col-8"> 
@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
  <form action="{{route('registration')}} " method="POST"  >
         @csrf
 

   <div clss="row">


    <div class="col-6">

       
       <div class="form-group">
    <label   for="email">Email:</label>
    <div  >
      <input  name ="email" type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>


  <div class="form-group">
    <div class=" ">
      <button type="submit" class="btn btn-success">Submit</button>
      
    </div>

  </div>
     </div>
     
      
   </div>


  </form>


</div>
   
     </div>
     <br>
       <div class="row">
    
 
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