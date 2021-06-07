 @extends('admin.admintemplate')

@section('content')


 
<!--Navigation bar Start--> 
  <div class="container">
   <h1 style="color: gray;font-weight: bold;">Driver Remove</h1>
   <hr>
 
   <?php 
   $count=1;
   ?>
    <table  id="customers"  style="color:black;">
     
     <thead   >

      <tr style="  height: 60px;  " >
          <th  rowspan="2">Serial No</th>
         <th  colspan="3" style="text-align: center;">General Information</th>
          <th  colspan="3" style="text-align: center;">Formal Info</th>
          <th  rowspan="2"   style="text-align: center;">Actoin</th>
       </tr>
       <tr style="  height: 60px; ">
         
         <th style="width: 120px; text-align:center;">Name</th>
         <th style="width: 120px; text-align:center; ">Email </th>
         <th style="width: 120px; text-align:center; ">Phone No</th>
         <th style="width: 120px; text-align:center; "> Bus No</th>
         <th style="width: 120px; text-align:center; ">Area</th>
         <th style="width: 120px; text-align:center; ">Rank</th>
          
 
       </tr>
     </thead>
     <tbody>

       @foreach($request as $request)
         <tr style="margin:auto; height: 40px; text-align: center;">
           <td> {{$count++}}</td> 
            <td> {{$request->name}}</td>
            <td> {{$request->email}}</td>
            <td> {{$request->cont_no}}</td>
            <td> {{$request->bus_no}}</td>
            <td> {{$request->area}}</td>
            <td> {{$request->rank}}</td>
            

            <td> <a href="#" style="text-decoration: none; margin-left: 10px; " class="btn btn-warning">Delete</a> </td>
         </tr>
       @endforeach
     </tbody>
   </table>
 </div>
   

</div>


 @endsection