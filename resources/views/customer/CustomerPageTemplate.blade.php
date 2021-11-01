<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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

   
         
          
        <!-- add icon link -->
        <link rel = "icon" href = {{asset('image/user/wms.jpg')}} 
        type = "image/x-icon">



        <link rel="stylesheet" href= {{asset('css/style.css')}} >
        <link rel="stylesheet" href= {{asset('css/stelex.css')}} >



<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />



  </head>
  <body  >


     <!-- header  -->
     <header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
      <div class="logo"><a href="/">WMS</a></div>
      <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
        <nav class="main_nav">
          <ul class="d-flex flex-row align-items-start justify-content-start">
       
            <li class=" "><a href="/location">Bus location</a></li>
            <li class=" "><a href="/complain">Complain</a></li>
            <li class=" "><a href="/payment">Payment</a></li>
             
            <li class=" "><a href="/feedback">Feed Back</a></li>
             
<li>
             <div class="dropdown   " >
    <a type="button" class="btn   " data-toggle="dropdown" style="   color:#ffffff; margin-top: -8px; font-size: 14px;">
    {{$loggedUser['name']}} <img src="{{$loggedUser['image']}}" class="img-profile rounded-circle" height="30" width="30"> 
    </a>
    <div class="dropdown-menu" style="background-color: black;">
      <a class="dropdown-item" href="/home">Profile</a>
      <a class="dropdown-item" href="/update">Update Profile</a>
      <a class="dropdown-item" href="/change_pin">Change Password</a>
      <hr>
      <a  href="{{Route('logout')}}" class="dropdown-item"  > <i class="fa fa-sign-out" style=" color:gray;"></i> LogOut</a>
    </div>
  </div></li>
            
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
                    <div class="home_title"><h1 style="color: white;">Online Garbage Collection System</h1></div>
                     
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

@yield('content')


     <!-- footer  -->
     <br>
     <br>
  
<div class="row" style="background-color:gray;  height: 100px; width: cover; font-weight: bold;  margin: auto;  text-align: center;color: white;" >
    
    <div class="col-2"><img src="{{asset('image/user/logo.jpg')}}" class="img-profile rounded-circle" height="100" width="100"> </div>
    <div class="col-8" style="margin-top:50px; font-size: 20px;">Designed By : Babul Akter</div>

    <div class="col-2">


    </div>
  </div>
      <!--End Footer -->
  


<script src={{asset('css/temp/js/jquery-3.3.1.min.js')}} ></script>

<script src={{asset('css/temp/styles/bootstrap-4.1.2/popper.js')}}></script>
<script src={{asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}></script>

<script src={{asset('css/temp/plugins/greensock/TweenMax.min.js')}}></script>

<script src= {{asset('css/temp/plugins/greensock/TimelineMax.min.js')}} ></script>

<script src={{asset('css/temp/plugins/scrollmagic/ScrollMagic.min.js')}}></script>
<script src={{asset('css/temp/plugins/greensock/animation.gsap.min.js')}}></script>

<script src={{asset('css/temp/plugins/greensock/ScrollToPlugin.min.js')}}></script>



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