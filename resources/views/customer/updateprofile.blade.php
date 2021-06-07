
   @extends('customer.CustomerPageTemplate')
   @section('content')
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

                            <form action="{{route('update_image')}}" method ="POST">
                              @csrf
  <label for="img">Select image:</label>
  <input type="file" id="img" name="img" accept="image/*">
  <input type="submit">
</form>
                        </div>

                        <div class="col-sm-8">
                          <form action="{{route('update_profile')}} " method="POST"  >
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
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
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