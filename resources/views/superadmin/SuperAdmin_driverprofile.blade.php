@extends('superadmin.SuperAdminTemplate')

@section('content')

<h1 style="color:#646f64;">Driver's Profile</h1>
<hr>
 <div class="page-content page-container"  style="witdh:1000px; font-weight: bold; margin-top: -30px;margin-left: -30px;">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4   user-profile"  style="padding:5px;">
                            <img  src="{{$user->image}}" style="height: cover; width: cover;">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <p style="font-weight: bold; color: #6185ec">General Information</p>
                                    	<hr>
                                <div class="row">

                                    <div class="col-sm-6">

                                        <p class="m-b-10 f-w-600">Name</p>
                                        <h6 class="text-muted f-w-400">{{$user->name}} </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{$user->email}} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">{{$user->cont_no}} </h6>
                                    </div>
                                </div>
                                <p class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="color:#6185ec; font-weight: bold;">
                                <div class="row">
                                    
                                <div class="col-8">Formal Information</div> 
                                   

                            </div> 

                            </p>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Bus No</p>
                                        <h6 class="text-muted f-w-400">{{$user->bus_no}} </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Area</p>
                                        <h6 class="text-muted f-w-400">{{$user->area}} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Rank</p>
                                        <h6 class="text-muted f-w-400">{{$user->rank}} </h6>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection