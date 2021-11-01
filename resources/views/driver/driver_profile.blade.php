   @extends('driver.driver_tamplate')

@section('content')

 
<!--Navigation bar Start--> 
<head><title>{{$loggedUser['name']}}</title></head>
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
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Name</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['name']}} </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['email']}} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['cont_no']}} </h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Post</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['post']}} </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Thana/UZ</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['thana']}} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">District</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['zila']}} </h6>
                                    </div>
                                </div>

                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">General Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Bus No</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['bus_no']}} </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Area</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['area']}} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Rank</p>
                                        <h6 class="text-muted f-w-400">{{$loggedUser['rank']}} </h6>
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