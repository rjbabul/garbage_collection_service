 @extends('superadmin.SuperAdminTemplate')

@section('content')

<h1 style="color:#646f64;">Update Profile</h1> 
<hr>
 <div class="page-content page-container"  style="witdh:1000px; font-weight: bold; margin-left: -50px; margin-top: -30px;">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full" >
                	   @if(Session::get('success'))
                                   <div class="alert alert-success">
                                    {{ Session::get('success')}}
                                @endif

                                 @if(Session::get('fail'))
                                   <div class="alert alert-danger">
                                    {{ Session::get('fail')}}
                                @endif
                                
                    <div class="row m-l-0 m-r-0" style="margin-left: 10px;">
                        <div class="col-sm-4   user-profile">
                            <img  src="{{$loggedUser['image']}}" style="height: cover;">

                            <form action="{{route('update_image_admin')}}" method ="POST">
	                              @csrf
								  <label for="img">Select image:</label>
								  <input type="file" id="img" name="img" accept="image/*">
								  <input type="submit">
							</form>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <p style="font-weight: bold; color: #6185ec">General Information</p>
                                      <hr>
                                     
                          
                                     <form action ="{{route('update_general_info')}}" method="POST">
                                     	@csrf
                                <div class="row">

                                    <div class="col-sm-6">

                                        <p class="m-b-10 f-w-600">Name</p>
                                        <h4 class="   f-w-400"><input type="text" name="name" placeholder="{{$loggedUser['name']}}"  ></h4>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h4 class="  f-w-400"><input type="email" name="email" placeholder="{{$loggedUser['email']}}" ></h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h4 class="    f-w-400"><input type="text" name="cont_no" placeholder="{{$loggedUser['cont_no']}}"  ></h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                         
                                        <input type="submit" name = "Update" value="Update" class="btn btn-success" style="margin-left:360px; margin-bottom: 30px; ">
                                    </div>

                            </form>
                                <p class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="color:#6185ec; font-weight: bold;">Formal Information</p>
                                <form action ="{{route('update_formal_info')}}" method="POST">
                                     	@csrf
                                  <div class="row">

                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Zone</p>
                                        <h4 class="    f-w-400"><input type="text" name="zone"  placeholder="{{$loggedUser['zone']}}"  ></h4>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Rank</p>
                                        <h4 class="    f-w-400"><input type="Number" name="rank" placeholder="{{$loggedUser['rank']}}" ></h4>
                                    </div>
                                    
                                </div>
                                 <div class="col-sm-6">
                                         
                                        <input type="submit" name = "Update" value="Update" class="btn btn-success" style="margin-left:360px; margin-bottom: 30px; ">
                                    </div>
                                
                        </form>

                        <form action="{{Route('update_address')}} " method="POST">
                        	@csrf
                                <p class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="color:#6185ec; font-weight: bold;">Address</p>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Post</p>
                                        <h4 class="    f-w-400"><input type="text" name="post" placeholder="{{$loggedUser['post']}}"  ></h4>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Thana/UZ</p>
                                        <h4 class="    f-w-400"><input type="text" name="Thana"  placeholder="{{$loggedUser['Thana']}}" ></h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">District</p>
                                         <h4 class="    f-w-400"><input type="text" name="Dist" placeholder="{{$loggedUser['Dist']}}"  ></h4>
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                         
                                        <input type="submit" name = "Update" value="Update" class="btn btn-success" style="margin-left:360px; margin-bottom: 30px; ">
                                    </div>

                            </form>
                                
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection