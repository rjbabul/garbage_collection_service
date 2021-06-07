  @extends('admin.admintemplate')

@section('content')
 
<!--Navigation bar Start--> 

  <h1 style="color:grey; font-weight: ">Add Customer</h1>
  <hr> 
   <div class="page-content page-container"  style="witdh:1000px;">
    <div class="padding">
  <form action="{{route('AddedCustomer')}} " method="POST"  >
    @if(Session::get('success'))
                                   <div class="alert alert-success">
                                    {{ Session::get('success')}}
                                @endif

                                 @if(Session::get('fail'))
                                   <div class="alert alert-danger">
                                    {{ Session::get('fail')}}
                                @endif
                                
                            @csrf
   
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-4">
                          <h6 class="m-b-20 p-b-5 b-b-default f-w-600"style="margin-left: 15px; margin-top: 10px;">General Information</h6>
                          <hr>
                           <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Name</p>
                                        <h6 class="text-muted f-w-400"> 
                                        <input type="text" name="name"> </h6>
                                    </div>
                                     <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"> 
                                        <input type="text" name="email"> </h6>
                                    </div>
                                     <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Password</p>
                                        <h6 class="text-muted f-w-400"> 
                                        <input type="password" name="password"> </h6>
                                    </div>

                        </div>

                        <div class="col-sm-8">
                         
                               
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600" style="margin-top: 10px;">Contact Info</h6>
                               <hr>
                                <div class="row">
                                     
                                    <div class="col-sm-6" style="margin-bottom: 50px;">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"> 
                                        <input type="text" name="cont"> </h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                <hr>
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
                                        <h6 class="text-muted f-w-400"><input type="text" name="dist"> </h6>
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                                <input type="submit" name = "Add Customer" value="Add Customer" class="btn btn-success" style="margin-left:320px; margin-bottom: 30px; ">
                            </div> 
                          </form>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection