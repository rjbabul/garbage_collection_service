 @extends('usermanual.pagetemplate')

@section('content')

     <div  class="  mr-top-20 bdc">
    <br>
    <!-- body  -->
     <div class="row" style="margin-left: 20px;">
      <div class="col-4 d" >

       
 
      </div>

  
  <form action="{{route('registration')}} " method="POST"  >


        @if(Session::get('success'))
           <div class="alert alert-success">
            {{ Session::get('success')}}
        @endif

         @csrf
<div class=" reg"> 

 <h4 style="margin-left: 50px;">Registration Form</h4>
  <hr>

   <div clss="row">


    <div class=" ">
 
           
       

  <div class="form-group fnt">
          <label>Name: </label>
       
         <input type="name" class="form-control" name="name" value="{{old('name')}}"  placeholder="Enter your name">
          <span class="text-danger">@error('name'){{$message}} @enderror</span>
     </div>

<div class="form-group fnt">
         <label>Email: </label>
         <input type="email" class="form-control"  name="email"  value="{{old('email')}}"  placeholder="example@gmail.com">


           <span class="text-danger">@error('email'){{$message}} @enderror</span>
     </div>

   <div  class="form-group">
          <label>Password: </label>
         <input type="password" class="form-control"  name="password"   placeholder="*******">
           <span class="text-danger">@error('password'){{$message}} @enderror</span>
     </div>

      


  <div class="form-group">
    <div >
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class=" ">
      <button type="submit" class="btn btn-success">Sing Up</button>
      <br><br>
      <b> if you have already account ? </b> 
      <a href="/LoginCustomer">Login</a>
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
 
   @endsection