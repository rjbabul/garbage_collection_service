@extends('superadmin.SuperAdminTemplate')

@section('content')

<h1 style="color:#646f64;">Customer's Profile</h1>
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
                                <p class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="color:#6185ec; font-weight: bold;">Address</p>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Post</p>
                                        <h6 class="text-muted f-w-400">{{$user->post}} </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Thana/UZ</p>
                                        <h6 class="text-muted f-w-400">{{$user->Thana}} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">District</p>
                                        <h6 class="text-muted f-w-400">{{$user->Dist}} </h6>
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

<h1 style="color:#646f64; margin-top: -10px;">Customer's Location</h1>
<hr>

 <div class="card  " style="width:780px; height:300px; margin:auto;   ">

 <div id= "map"  style="width:780px; height:300px;">
                                         <script>
                                          mapboxgl.accessToken = 'pk.eyJ1IjoicmpiYWJ1bCIsImEiOiJja3UydmY0NTUxbnh0MnZvcW94NmFzbXl6In0.9NAL5H9c01siH46UPF7URg';
                                          var map = new mapboxgl.Map({
                                            container: 'map',
                                            style: 'mapbox://styles/mapbox/streets-v11',
                                            center: [  @json($user->long ), @json($user->lat  )    ], // starting position
                                            zoom: 9 // starting zoom
                                          });


                                          map.addControl(new mapboxgl.NavigationControl());

                                          
                                              var marker = new mapboxgl.Marker({ color: 'black', rotation: 0 })
                                               .setLngLat([  @json($user->long ), @json($user->lat )    ]).setPopup(
                                                    new mapboxgl.Popup({ offset: 25 }) 
                                                      .setHTML(
                                                         
                                                      )
                                                  )
                                               .addTo(map);
                                              
                                        

                                        </script>

                            </div>
                          </div>


 <div class="row">
    <div class="col-8"></div>
    <div class="col-4">
          <div style="margin-top: 10px;  margin-bottom: 50px; ">

                <table  style="color: black;">
      
    
     <tbody>

       
         <tr  >
            
            <td>

               <a href="/customers_list" class="btn btn-success" style="width:100px; margin-left:30px;"> back </a>

             </td>

        
         </tr>
       
     </tbody>
   </table>

</div>
</div>
</div>
@endsection