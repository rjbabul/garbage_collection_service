<!DOCTYPE html>
<html>
<head>
    <title>{{$loggedUser['name']}}</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

        <link rel="stylesheet" href= {{asset('css/style.css')}} >
        <link rel="stylesheet" href= {{asset('css/stelex.css')}} >
       <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
 

<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />





</head>
<body style="background-color: #E7E9EB;">  

 
<div class="row" style="padding-left: 30px; margin-top:10px;">

<div class="col-2" style="background-color: #4e73df; padding-top: 20px;">
     <div align=" "   >
       <a class=" " href="{{route('SuperAdmin_profile')}}" style="text-decoration: none; color: white;   font-size: 16px;">Profile</a>
     </div>
      
<hr>
 <div align=" "   >

       <a href="\SuperAdmin_desboard" style="text-decoration: none; color: white;  font-size: 16px;"> <i class="fa fa-home" style=" color:#ffffff;"></i> Deshboard</a>
     </div>
<hr>

<div align=" "   >

       <a href="\Super_admin_feedback" style="text-decoration: none; color: white;  ; font-size: 16px;"> <i class="fa fa-star" style=" color:#ffffff;"></i> Feedback</a>
     </div>
<hr>

 <div align=" "   >

       <a href="\super_customer_complain" style="text-decoration: none; color: white;   font-size: 16px;"> <i class="fa fa-comments" style=" color:#ffffff;"></i> Complain</a>
     </div>
<hr> 
  
 
    <div align=" "   >

       <a href="\Super_customer_list" style="text-decoration: none; color: white;   font-size: 16px;"> <i class="fa fa-user" style=" color:#ffffff;"></i> Customer List  </a>
     </div>
<hr>

<div align=" "   >

       <a href="\Super_driver_list" style="text-decoration: none; color: white;   font-size: 16px;"> <i class="fa fa-comments" style=" color:#ffffff;"></i> Driver List</a>
     </div>
<hr> 

  
  
       
     <div class="dropdown dropright " >
    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" style="background-color:#4e73df;  color:white; margin-left: -10px;  ">
     <i class="fa fa-user" style=" color:#ffffff;"></i> Admin
    </button>
    <div class="dropdown-menu" style="font-size: 12px;">
      <a class="dropdown-item" href="\adminList" style="text-decoration: none; color: black;    ">  Admin List</a>
      <a class="dropdown-item" href="/remove_admin">Remove Admin</a>
      <a class="dropdown-item" href="/add_admin">Add Admin</a>
    </div>
  </div>
<hr>
 
 


</div>
<div class="col-10">

<!--Navigation bar Start--> 
    <div  style="margin-bottom: 15px; margin-left: 5px;" class="row bg-light justify-content-between">
       <div class="col-8">
          <nav class="navbar navbar-light bg-light justify-content-between">
   
  <form class="form-inline ">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0 "  type="submit">  <i class="fa fa-search" style=" color:red"></i></button>
  </form>
    
            
</nav>

       </div>

       <div class="col-4 row" style="margin:auto;">
         
        <div class="col-6">
           <span id="group">
                 <a href="#" ><i class="fa fa-bell-o fa-2x"> </i></a>
                 <span class="badge badge-light">5</span>


               </span>



                <span id="group">
                 <a href="#" ><i class="fa fa-envelope  fa-2x"> </i></a>
                 <span class="badge badge-light">5</span>
               </span>
               
              <div class="vl" style="margin-left: 35px;"></div>
        </div>
        
        <div class="col-6" >
           
      
       <div class="dropdown   " >
    <button type="button" class="btn   " data-toggle="dropdown" style="background-color:#ffffff;  color:#5f647b; font-size: 14px;">
    {{$loggedUser['name']}} <img src="{{$loggedUser['image']}}" class="img-profile rounded-circle" height="30" width="30"> 
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="\SuperAdmin_profile">Profile</a>
      <a class="dropdown-item" href="\superadmin_update_profile">Update Profile</a>
      <a class="dropdown-item" href="\superadmin_password_reset">Change Password</a>
      <hr>
      <a  href="\logout" class="dropdown-item"  > <i class="fa fa-sign-out" style=" color:gray;"></i> LogOut</a>
    </div>
  </div>
        </div>
                
             

       </div>



    </div>

 
<!--Navigation bar Start--> 

@yield('content')



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