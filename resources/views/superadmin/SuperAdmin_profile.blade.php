 @extends('superadmin.SuperAdminTemplate')

@section('content')

 <h1 style="color:#646f64;">SuperAdmin's Profile</h1> 
<hr>
 <div class="page-content page-container"  style="witdh:1000px; font-weight: bold; margin-left: -50px; margin-top: -30px;">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full" >
                    <div class="row m-l-0 m-r-0" style="margin-left: 10px;">
                        <div class="col-sm-4   user-profile" >
                            <img  src="{{$loggedUser['image']}}" style="height: cover;" >
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <p style="font-weight: bold; color: #6185ec">General Information</p>
                                      <hr>
                                <div class="row">

                                    <div class="col-sm-6">

                                        <p class="m-b-10 f-w-600">Name</p>
                                        <h6 class="   f-w-400">{{$loggedUser['name']}}</h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="  f-w-400">{{$loggedUser['email']}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="    f-w-400">{{$loggedUser['cont_no']}} </h6>
                                    </div>
                                </div>
                                 
                                
                        
                                <p class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="color:#6185ec; font-weight: bold;">Address</p>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Post</p>
                                        <h6 class="  f-w-400">{{$loggedUser['post']}}</h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Thana/UZ</p>
                                        <h6 class="  f-w-400">{{$loggedUser['Thana']}} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">District</p>
                                        <h6 class="  f-w-400">{{$loggedUser['Dist']}} </h6>
                                    </div>
                                </div>
                                
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