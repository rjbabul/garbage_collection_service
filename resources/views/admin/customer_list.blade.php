 @extends('admin.admintemplate')

@section('content')

 
<!--Navigation bar Start--> 

 <div class="container">
  <h1>Customer List  </h1>
  <hr>
     <div class="row">
   @foreach($customer as $customer)

    
       
        <div class="card col-3 " style="background-color:#9e9b9b; margin-right:20px; font-size: 14px;"  >
    <img class="card-img-top" src="{{$customer->image}}"  height ="200" style="width:100%; margin-top: 10px;  ">
    <div class="card-body"  >
      <p class="card-title" style="color:black;" >Name : {{$customer->name}}</p>
      <p class="card-title" style="color:black;">Phone : {{$customer->cont_no}}</p>
      <p class="card-text" style="color:black;">Member from {{$customer->updated_at}}</p>
      <a  href=" {{route('user_profile', $customer->email  )}}"  class="btn btn-success">Customer Profile </a> 
    </div>
  </div>
     

          

@endforeach
</div>
 </div>



@endsection