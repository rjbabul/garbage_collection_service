 @extends('admin.admintemplate')

@section('content')


 
<!--Navigation bar Start--> 
 <div class="container">
   <h1 style="color: gray;font-weight: bold;">Card Request </h1>
   <hr>
    <table  style="color: black;">
      @if(Session::get('success'))
           <div class="alert alert-success">
            {{ Session::get('success')}}
        @endif

         @if(Session::get('fail'))
           <div class="alert alert-danger">
            {{ Session::get('fail')}}
        @endif
     <thead>
       <tr style="  height: 60px; text-align: center;">
         <th style="width: 150px;">Phone No</th>
         <th style="width: 150px;">TnxID </th>
         <th style="width: 150px;"> Amount</th>
          
         <th style="width: 250px;" colspan="2">Action</th>
       </tr>
     </thead>
     <tbody>

       @foreach($request as $request)
         <tr style="margin:auto; height: 40px; text-align: center;">
            <td> {{$request->BkashNo}}</td>
            <td> {{$request->TnxID}}</td>
            <td> {{$request->amount}}</td>
            <td>

            <form action="{{route('cardrequestprocess')}}" method="POST">
            

        @csrf
        <input type="hidden" name="email" value="{{$request->username}}">
        <button class="btn btn-success">Details</button>
      </form>

    </td>

            <td>   
             <form action="{{route('card_request_delete')}}" method="POST">
            
        @csrf
        <input type="hidden" name="email" value="{{$request->username}}">
        <button class="btn btn-danger">Delete</button>
      </form> 

    </td>
         </tr>
       @endforeach
     </tbody>
   </table>
 </div>

@endsection