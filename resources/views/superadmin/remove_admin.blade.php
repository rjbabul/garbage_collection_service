 @extends('superadmin.SuperAdminTemplate')

@section('content')

 <div class="container">
    @if(Session::get('success'))
                  <div class="alert alert-warning">
                     {{ Session::get('success')}}
                      @endif

                    @if(Session::get('fail'))
                  <div class="alert alert-danger">
                        {{ Session::get('fail')}}
                                @endif
                                
   <h1 style="color: gray;font-weight: bold;">Admin Remove</h1>
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
         <th style="width: 120px; text-align:center; ">Area </th>
         <th style="width: 120px; text-align:center; ">Phone No</th>
         <th style="width: 120px; text-align:center; ">Thana</th>
         <th style="width: 120px; text-align:center; ">Home Twon</th>
         <th style="width: 120px; text-align:center; ">Rank</th>
          
 
       </tr>
     </thead>
     <tbody>

       @foreach($request as $request)
         <tr style="margin:auto; height: 40px; text-align: center;">
           <td> {{$count++}}</td> 
            <td> {{$request->name}}</td>
            <td> {{$request->zone}}</td>
            <td> {{$request->cont_no}}</td>
            <td> {{$request->Thana}}</td>
            <td> {{$request->Dist}}</td>
             
            <td> {{$request->rank}}</td>
            

            <td> 
            <form  action=" {{route('admin_delete' )}}"  method="POST"> 
      @csrf

      <input type="hidden" name="email" value="{{$request->email}}" >
      <input type="submit" name="Remove admin" value="Remove Admin" class="btn btn-warning">

      </form>

             </td>

         </tr>
       @endforeach
     </tbody>
   </table>
 </div>
   

</div>



@endsection