 @extends('admin.admintemplate')

@section('content')


 
<!--Navigation bar Start--> 
 <div class="container">
   <h1 style="color: gray;font-weight: bold;">Recharge Pending</h1>
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
         <th style="width: 150px;">Card No</th>
         <th style="width: 150px;">Amount</th>
         <th style="width: 250px;" colspan="2">Action</th>
       </tr>
     </thead>
     <tbody>

       @foreach($request as $request)
         <tr style="margin:auto; height: 40px; text-align: center;">
            <td> {{$request->bkash_no}}</td>
            <td> {{$request->tnxID}}</td>
            <td> {{$request->card_no}}</td>
            <td> {{$request->amount}}</td>
            <td>

            <form action="{{route('recharge_req')}}" method="POST">
            

        @csrf
        <input type="hidden" name="card_no" value="{{$request->card_no}}">
        <button class="btn btn-success">Approve</button>
      </form>

    </td>

            <td>   
             <form action="{{route('recharge_req_delete')}}" method="POST">
            
        @csrf
        <input type="hidden" name="card_no" value="{{$request->card_no}}">
        <button class="btn btn-danger">Delete</button>
      </form> 

    </td>
         </tr>
       @endforeach
     </tbody>
   </table>
 </div>

@endsection