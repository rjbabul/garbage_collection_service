@extends('admin.admintemplate')

@section('content')

 <div class="container">
   <h1 style="color: gray;font-weight: bold;">Check payment</h1>
   <hr>
 
   <?php 
   $count=1;
   ?>
    <table  id="customers" style="color:black;" >
     
     <thead>

        @if(Session::get('success'))
           <div class="alert alert-warning">
            {{ Session::get('success')}}
        @endif

         @if(Session::get('fail'))
           <div class="alert alert-danger">
            {{ Session::get('fail')}}
        @endif

      <tr style="  height: 60px;  " >
          <th  rowspan="2">Serial No</th>
         <th  colspan="8" style="text-align: center;">Payment Information</th>
           
       </tr>
       <tr style="  height: 60px; ">
         
         <th style="width: 120px; text-align:center;">Name</th>
          
         <th style="width: 120px; text-align:center; ">Phone No</th>
          <th style="width: 120px; text-align:center; ">Month</th>
         <th style="width: 120px; text-align:center; ">Amount</th>
         <th style="width: 120px; text-align:center; ">Date</th>
          
 
       </tr>
     </thead>
     <tbody>

       @foreach($dt as $dt)
         <tr style="margin:auto; height: 40px; text-align: center;">
           <td> {{$count++}}</td> 
            <td> {{$dt->name}}</td>
           <td> {{$dt->cont_no}}</td>
            <td> {{$dt->month}}</td>
            <td> {{$dt->amount}}</td>
            <td> {{$dt->updated_at}}</td>
            

             
         </tr>
       @endforeach
     </tbody>
   </table>
 </div>
   

</div>

@endsection