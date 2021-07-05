  @extends('admin.admintemplate')

@section('content')
 
<!--Navigation bar Start--> 
    <head><title>Change Password  </title></head>
   <!-- body  -->
     <div  class="  mr-top-20 bdc">
    <br>
 
     
              
     <div class="page-content page-container"  style="witdh:1000px;">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4   user-profile">
                            <img  src="{{$loggedUser['image']}}" style="height: cover;">

                             
                        </div>

                        <div class="col-sm-8">
                          <form action="{{route('update_password_admin_')}} " method="POST"  >
                               @if(Session::get('success'))
                                   <div class="alert alert-success">
                                    {{ Session::get('success')}}
                                @endif

                                 @if(Session::get('fail'))
                                   <div class="alert alert-danger">
                                    {{ Session::get('fail')}}
                                @endif
                                
                            @csrf
                            <div class="card-block">
                                 
                                <h3 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Update Password</h3>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Old Password</p>
                                        <h6 class="text-muted f-w-400"><input type="password" name="old"> </h6>     <span class="text-danger">@error('old'){{$message}} @enderror</span>
                                    </div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">New Password</p>
                                        <h6 class="text-muted f-w-400"><input type="password" name="new"> </h6>

                                        <span class="text-danger">@error('new'){{$message}} @enderror</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Confirm Password</p>
                                        <h6 class="text-muted f-w-400"><input type="password" name="confirm"> </h6>
                                        <span class="text-danger">@error('confirm'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               <br> 
                                <input type="submit" name = "update" value="Change Password" class="btn btn-success">
                            </div> 
                          </form>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection