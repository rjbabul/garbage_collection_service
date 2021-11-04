 @extends('superadmin.SuperAdminTemplate')

@section('content')


 <div class="container">
  <h1>Driver List  </h1>
  <hr>
     <div class="row">
   @foreach($driver as $driver)

    
       
        <div class="card col-3 " style="background-color:#9e9b9b; margin-right:20px; font-size: 14px;"  >
    <img class="card-img-top" src="{{$driver->image}}"  height ="200" style="width:100%">
    <div class="card-body"  >
      <p class="card-title"style="color:black;">Name : {{$driver->name}}</p>
      <p class="card-title" style="color:black;">Phone : {{$driver->cont_no}}</p>
      <p class="card-text" style="color:black;">Member from {{$driver->updated_at}}</p>
       
       <form  action=" {{route('SuperAdmin_driverprofile' )}}"  method="POST"> 
      @csrf

      <input type="hidden" name="email" value="{{$driver->email}}" >
      <input type="submit" name="Driver profile" value="driver profile" class="btn btn-success">

      </form>

    </div>
  </div>

@endforeach
</div>
 </div>


@endsection