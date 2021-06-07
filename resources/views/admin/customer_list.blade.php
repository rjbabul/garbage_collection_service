<!DOCTYPE html>
<html>
<head>
    <title>{{$loggedUser['name']}}</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

</head>
<body style="background-color: #E7E9EB;">  

 
<div class="row" style="padding-left: 30px; margin-top:10px;">

<div class="col-2" style="background-color: #4e73df; padding-top: 20px;">
     <div align=" "   >
       <a class=" " href="{{route('admin_profile')}}" style="text-decoration: none; color: white;   font-size: 16px;">Profile</a>
     </div>
      
<hr>
 <div align=" "   >

       <a href="\desboard" style="text-decoration: none; color: white;  font-size: 16px;"> <i class="fa fa-home" style=" color:#ffffff;"></i> Desboard</a>
     </div>
<hr>

<div align=" "   >

       <a href="\admin_feedback" style="text-decoration: none; color: white;  ; font-size: 16px;"> <i class="fa fa-star" style=" color:#ffffff;"></i> Feedback</a>
     </div>
<hr>

 <div align=" "   >

       <a href="\customer_complain" style="text-decoration: none; color: white;   font-size: 16px;"> <i class="fa fa-comments" style=" color:#ffffff;"></i> Conplain</a>
     </div>
<hr> 
 <div align=" "   >

       <a href="\request_pendin" style="text-decoration: none; color: white;   font-size: 16px;"> <i class="fa fa-user" style=" color:#ffffff;"></i> Request Pending</a>
     </div>
<hr>

 <div align=" "   >

       <a href="\card_rechage" style="text-decoration: none; color: white;   font-size: 16px;"> <i class="fa fa-money" style=" color:#ffffff;"></i> Card Recharg</a>
     </div>
<hr>

 
 
<div class="dropdown dropright " >
    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" style="background-color:#4e73df;  color:white; margin-left: -10px;  ">
     <i class="fa fa-user" style=" color:#ffffff;"></i> Customer
    </button>
    <div class="dropdown-menu" style="font-size: 12px;">
      <a class="dropdown-item" href="\customers_list" style="text-decoration: none; "></i> Customers List</a>
      <a class="dropdown-item" href="\remove_customer">Remove Customer</a>
      <a class="dropdown-item" href="\add_customer">Add Customer</a>
    </div>
  </div>
  
      
    
<hr>
  
       
     <div class="dropdown dropright " >
    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" style="background-color:#4e73df;  color:white; margin-left: -10px;  ">
     <i class="fa fa-user" style=" color:#ffffff;"></i> Driver
    </button>
    <div class="dropdown-menu" style="font-size: 12px;">
      <a class="dropdown-item" href="\driver_list" style="text-decoration: none; color: black;    ">  Driver List</a>
      <a class="dropdown-item" href="/remove_driver">Remove Driver</a>
      <a class="dropdown-item" href="/add_driver">Add Driver</a>
    </div>
  </div>
<hr>
 
  <div align=" "   >

       <a href="{{route('logout')}}" style="text-decoration: none; color: white;     font-size: 16px;"> <i class="fa fa-sign-out" style=" color:#ffffff;"></i> LogOut</a>
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
      <a class="dropdown-item" href="\admin_profile">Profile</a>
      <a class="dropdown-item" href="#">Update Profile</a>
      <hr>
      <a  href="\logout" class="dropdown-item"  > <i class="fa fa-sign-out" style=" color:gray;"></i> LogOut</a>
    </div>
  </div>
        </div>
                
             

       </div>



    </div>


 
<!--Navigation bar Start--> 

 <div class="container">
  <h1>Customer List  </h1>
  <hr>
     <div class="row">
   @foreach($customer as $customer)

    
       
        <div class="card col-3 " style="background-color:#9e9b9b; margin-right:20px; font-size: 14px;"  >
    <img class="card-img-top" src="{{$customer->image}}"  height ="200" style="width:100%">
    <div class="card-body"  >
      <p class="card-title">Name : {{$customer->name}}</p>
      <p class="card-title">Phone : {{$customer->cont_no}}</p>
      <p class="card-text">Member from {{$customer->updated_at}}</p>
      <a href="#" class="btn btn-primary">See Details</a>
    </div>
  </div>
     

          

@endforeach
</div>
 </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>