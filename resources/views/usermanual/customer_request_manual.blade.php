<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href={{asset('css/temp/styles/bootstrap-4.1.2/bootstrap.min.css')}}>
<link href={{asset('css/temp/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}} rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href={{asset('css/temp/plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}>
<link rel="stylesheet" type="text/css" href={{asset('css/temp/plugins/OwlCarousel2-2.3.4/owl.theme.default.css')}} >

<link rel="stylesheet" type="text/css" href={{asset('css/temp/plugins/OwlCarousel2-2.3.4/animate.css')}} >
<link href= {{asset('css/temp/plugins/jquery-datepicker/jquery-ui.css')}} rel="stylesheet" type="text/css">
<link href= {{asset('css/temp/plugins/colorbox/colorbox.css')}} rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href= {{asset('css/temp/styles/main_styles.css')}} >
<link rel="stylesheet" type="text/css" href={{asset('css/temp/styles/responsive.css')}} >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{asset('js/maprelated.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/logstyle.css')}} ">

     
   
        <title> 
            Online Garbage Collection System
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = {{asset('image/user/wms.jpg')}} 
        type = "image/x-icon">



        <link rel="stylesheet" href= {{asset('css/style.css')}} >
        <link rel="stylesheet" href= {{asset('css/stelex.css')}} >

        <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        body {
            margin: 0;
            padding: 0;
        }

         
    </style>
 
  

  </head>
  <body  >


     <!-- header  -->
     <header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
      <div class="logo"><a href="/">WMS</a></div>
      <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
        <nav class="main_nav">
          <ul class="d-flex flex-row align-items-start justify-content-start">
                <li class="active"><a href="/">{{$loggedUser['name']}}</a></li>
          
 
            <li class=" "><a href="{{Route('logout')}}">LogOut</a></li>

            
          </ul>
        </nav>
         
        <!-- Hamburger Menu -->
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      </div>
    </div>
  </header>

   

  <!-- Home -->

  <div class="home" style="height:380px;">
    <div class="home_slider_container">
      <div class="owl-carousel owl-theme home_slider">
        
        <!-- Slide -->
        <div class="slide">
          <div class="background_image"  >
            <img src={{asset('image/user/wate2020.jpg')}} >
          </div>
          <div class="home_container">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="home_content text-center">
                    <div class="home_title"><h1 style="color: white;">Online Garbage Collection System </h1></div>
                     
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


   <!-- body  -->
     <div  class="  mr-top-20 bdc">
    <br>
 
     
              
     <div class="page-content page-container"  style="margin:20px">
    <div class="padding">
        <div class="row container d-flex justify- -center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                      <h3>Please Update Your Infromation for <b style="color: green;"> Accepting your request.</b>  </h3>
                       

                        <div class="col-6"> 

                          <form action="{{route('update_request_profile')}} " method="POST"  >
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
                                        <p class="m-b-10 f-w-600" >Post</p>
                                        <h6 class="text-muted f-w-400"><input type="text" name="post"> </h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">Thana/UZ</p>
                                        <h6 class="text-muted f-w-400"><input type="text" name="thana"> </h6>
                                    </div>
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">District</p>
                                        <h6 class="text-muted f-w-400"><input type="text" name="district"> </h6>
                                    </div>
                                </div>
                              
                                <input type="submit" name = "Update" value="Update" class="btn btn-success">


                            </div> 
                          </form>
                        </div>

         
                        <div class="col-12  user-profile">
                        
  
                           <h6 class="m-b-20 p-b-5 b-b-default f-w-600 ">Update Your Location</h6>
               
                        <form action="{{route('update_customer_location')}}" method="POST">

                        @csrf
                                <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
                          <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">
                           

                      <div  id="map" style="height:  300px; width:cover;">
                         
                           
                      
                        </div>
                            <br> 
                             
                             <input type='text' name="let" id='id1' onclick="gfg_Run1()" placeholder="click to get current location" style="height: 40px;" />
                               <input type='text' name="long" id='id2' onclick="gfg_Run2()" placeholder="click to get current location" style="height: 40px;"/>
                                 
                                 
                                 

                                    <script>
                                        mapboxgl.accessToken = 'pk.eyJ1IjoicmpiYWJ1bCIsImEiOiJja3UydmY0NTUxbnh0MnZvcW94NmFzbXl6In0.9NAL5H9c01siH46UPF7URg';
                                              const map = new mapboxgl.Map({
                                                container: 'map',
                                                style: 'mapbox://styles/mapbox/streets-v11',
                                                center: [90, 24], // starting position
                                                zoom: 12
                                              });
                                                map.addControl(
                                                      new MapboxGeocoder({
                                                          accessToken: mapboxgl.accessToken,
                                                          mapboxgl: mapboxgl
                                                      }) 
                                               
                                                     );
                                                    
                                        var inputF = document.getElementById("id2");
                                        var inputF2 = document.getElementById("id1");
                                        
                                         setInterval(() => {
                                            navigator.geolocation.getCurrentPosition(getPosition)
                                        }, 5000);

                                function getPosition(position){
                                        // console.log(position)
                                        
                                                                                         
                                              map.on('click', ({ lngLat }) => {
                                                const coords = Object.keys(lngLat).map((key) => lngLat[key]);
                                                const end = {
                                                  type: 'FeatureCollection',
                                                  features: [
                                                    {
                                                      type: 'Feature',
                                                      properties: {},
                                                      geometry: {
                                                        type: 'Point',
                                                        coordinates: coords
                                                      }
                                                    }
                                                  ]
                                                };

                                                   if (map.getLayer('end')) {
                                                    map.getSource('end').setData(end);
                                                  } else {
                                                    map.addLayer({
                                                      id: 'end',
                                                      type: 'circle',
                                                      source: {
                                                        type: 'geojson',
                                                        data: {
                                                          type: 'FeatureCollection',
                                                          features: [
                                                            {
                                                              type: 'Feature',
                                                              properties: {},
                                                              geometry: {
                                                                type: 'Point',
                                                                coordinates: coords

                                                              }
                                                            }
                                                          ]
                                                        }
                                                      },
                                                      paint: {
                                                        'circle-radius': 10,
                                                        'circle-color': '#f30'
                                                      }
                                                    });
                                                  }
                                                lat = coords[0]
                                                long = coords[1]
                                                getRoute(coords);
                                              });
                                          }

                                           function gfg_Run1() {
                                            inputF.setAttribute('value', lat);
                                            inputF2.setAttribute('value', long);
                                            
                                        }

                                        function gfg_Run2() {
                                            inputF.setAttribute('value', lat);
                                            inputF2.setAttribute('value', long);
                                            
                                        }
                                    </script>

                            <input type="submit" name = "Confirm" value="Set  location" class="btn btn-success"  style="height: 40px;  ">

                            
                          </form>
                          
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   
   <br>
     <br>
   </div>
     <div>
     <section style="height:50px;"></section>
  <div class="row" style="text-align:center;">
    
  </div>



<!-- END BODY -->


    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
          <div class="col-md-3 footer-brand animated fadeInLeft">
              <h2>Logo</h2>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2020 ,All rights reserved</p>
            </div>
          <div class="col-md-4 footer-nav animated fadeInUp">
              <h4>Menu —</h4>
               
              <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-2 footer-social animated fadeInDown">
              <h4>Follow Us</h4>
              <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Linkedin</a></li>
                </ul>
            </div>
          <div class="col-md-3 footer-ns animated fadeInRight">
              <h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for.">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">search<span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
    <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="http://enfoplus.net">Rj. Babul</a></p></section>
  </div>
      
      

      <!--End Footer -->
  


<script src={{asset('css/temp/js/jquery-3.3.1.min.js')}} ></script>

<script src={{asset('css/temp/styles/bootstrap-4.1.2/popper.js')}}></script>
<script src={{asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}></script>

<script src={{asset('css/temp/plugins/greensock/TweenMax.min.js')}}></script>

<script src= {{asset('css/temp/plugins/greensock/TimelineMax.min.js')}} ></script>
 
<script src={{asset('css/temp/plugins/greensock/animation.gsap.min.js')}}></script>

<script src={{asset('css/temp/plugins/greensock/ScrollToPlugin.min.js')}}></script>

<script >
  var lat, long;
</script>

<script src={{asset('css/temp/plugins/OwlCarousel2-2.3.4/owl.carousel.js')}}
></script>
<script src= {{asset('css/temp/plugins/easing/easing.js')}}></script>

<script src= {{asset('css/temp/plugins/progressbar/progressbar.min.js')}}></script>

<script src={{asset('css/temp/plugins/parallax-js-master/parallax.min.js')}}></script>
<script src={{asset('css/temp/plugins/jquery-datepicker/jquery-ui.js')}} ></script>
<script src={{asset('css/temp/plugins/colorbox/jquery.colorbox-min.js')}}></script>
<script src={{asset('css/temp/js/custom.js')}}></script>

   
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

 