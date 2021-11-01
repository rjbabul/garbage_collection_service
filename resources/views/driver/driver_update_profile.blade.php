@extends('driver.driver_tamplate')

@section('content')

 
<!--Navigation bar Start--> 
  <head><title>Update Profile</title></head>
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

                            <form action="{{route('deriver_update_image')}}" method ="POST">
                              @csrf
  <label for="img">Select image:</label>
  <input type="file" id="img" name="img" accept="image/*">
  <input type="submit">
</form>
                        </div>

                        <div class="col-sm-8">
                          <form action="{{route('driverUpdateProfile')}} " method="POST"  >
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
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                               
                                <div class="row">
                                     
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"> 
                                        <input type="text" name="cont"> </h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Post</p>
                                        <h6 class="text-muted f-w-400"><input type="text" name="post"> </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Thana/UZ</p>
                                        <h6 class="text-muted f-w-400"><input type="text" name="thana"> </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">District</p>
                                        <h6 class="text-muted f-w-400"><input type="text" name="district"> </h6>
                                    </div>
                                </div>
                                
                                </ul>
                                <input type="submit" name = "Update" value="Update" class="btn btn-success">
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