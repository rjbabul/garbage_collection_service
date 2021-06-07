 @extends('admin.admintemplate')

@section('content')
 
<!--Navigation bar Start--> 
  <div class="container">
   <h1 style="color: gray;font-weight: bold;">Customer Remove</h1>
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
         <th  colspan="3" style="text-align: center;">General Information</th>
          <th  colspan="3" style="text-align: center;">Address</th>
          <th  rowspan="2"   style="text-align: center;">Actoin</th>
       </tr>
       <tr style="  height: 60px; ">
         
         <th style="width: 120px; text-align:center;">Name</th>
         <th style="width: 120px; text-align:center; ">Email </th>
         <th style="width: 120px; text-align:center; ">Phone No</th>
         <th style="width: 120px; text-align:center; "> Post</th>
         <th style="width: 120px; text-align:center; ">Thana</th>
         <th style="width: 120px; text-align:center; ">Dist</th>
          
 
       </tr>
     </thead>
     <tbody>

       @foreach($request as $request)
         <tr style="margin:auto; height: 40px; text-align: center;">
           <td> {{$count++}}</td> 
            <td> {{$request->name}}</td>
            <td> {{$request->email}}</td>
            <td> {{$request->cont_no}}</td>
            <td> {{$request->post}}</td>
            <td> {{$request->Thana}}</td>
            <td> {{$request->Dist}}</td>
            

            <td><form action="{{route('customer_request_delete')}}" method="POST">
            
        @csrf
        <input type="hidden" name="email" value="{{$request->email}}">
        <button class="btn btn-warning">Remove</button>
      </form> </td>
         </tr>
       @endforeach
     </tbody>
   </table>
 </div>
   

</div>



 @endsection