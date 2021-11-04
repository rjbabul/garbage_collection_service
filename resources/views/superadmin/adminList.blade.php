 @extends('superadmin.SuperAdminTemplate')

@section('content')

<div class="container">
  <h1>Admin List  </h1>
  <hr>
     <div class="row">
   @foreach($admin as $admin)

    
       
        <div class="card col-3 " style="background-color:#9e9b9b; margin-right:20px; font-size: 14px;"  >
    <img class="card-img-top" src="{{$admin->image}}"  height ="200" style="width:100%">
    <div class="card-body"  >
      <p class="card-title"style="color:black;">Name : {{$admin->name}}</p>
      <p class="card-title" style="color:black;">Phone : {{$admin->cont_no}}</p>
      <p class="card-text" style="color:black;">Member from {{$admin->updated_at}}</p>
      
        <form  action=" {{route('user_profile_admin' )}}"  method="POST"> 
      @csrf

      <input type="hidden" name="email" value="{{$admin->email}}" >
      <input type="submit" name="Admin profile" value="Admin profile" class="btn btn-success">

      </form>
    </div>
  </div>

@endforeach
</div>
 </div>


@endsection