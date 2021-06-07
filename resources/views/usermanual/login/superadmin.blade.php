 @extends('usermanual.pagetemplate')

@section('content')

     <div  class="  mr-top-20 bdc">
    <br>
    <!-- body  -->
     <div class="row" style="margin-left: 20px;">
      <div class="col-4 d" >

         

      </div>

<div class="  log " > 
 <h4 style ="color: gray;">SuperAdmin Login</h4>
 <hr>
  <form action="#" method="POST"  >

        @if(Session::get('fail'))
           <div class="alert alert-danger">
            {{ Session::get('fail')}}
        @endif
         @csrf
 

   <div clss="row">

       
      
     <div class="form-group">
         <label>Email: </label>
         <input type="email" class="form-control"  name="email"  value="{{old('email')}}"  placeholder="example@gmail.com">


           <span class="text-danger">@error('email'){{$message}} @enderror</span>
     </div>
     <div  class="form-group">
          <label>Password: </label>
         <input type="password" class="form-control"  name="password"   placeholder="*******">
           <span class="text-danger">@error('password'){{$message}} @enderror</span>
     </div>
         <button type="submit" class="btn btn-success">Sing in</button>
       <a href = "{{asset(Route('forget'))}} ">Forget password</a>
     

  </div>
    
     
      
   </div>


  </form>
</div>

</div>
   
     </div>
     <br>
       <div class="row">
    
 
   </div>
 
     <!-- footer  -->
  @endsection