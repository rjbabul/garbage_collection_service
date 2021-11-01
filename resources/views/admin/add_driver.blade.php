  @extends('admin.admintemplate')

@section('content')

 
<!--Navigation bar Start--> 

  <h1 style="color:grey; font-weight: ">Add Driver</h1>
  <hr> 
   <div class="page-content page-container"  style="witdh:1000px;">
    <div class="padding">
  <form action="{{route('AddedDriver')}} " method="POST"  >
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
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Formal Info</h6>
                                <hr>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Bus No</p>
                                        <h6 class="text-muted f-w-400"><input type="number" name="busno"> </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Area</p>
                                        <h6 class="text-muted f-w-400"><input type="text" name="area"> </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Rank</p>
                                        <h6 class="text-muted f-w-400"><input type="number" name="rank"> </h6>
                                    </div>
                                </div>
                               
                                <input type="submit" name = "Add Driver" value="Add Driver" class="btn btn-success" style="margin-left:320px; margin-bottom: 30px; ">
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