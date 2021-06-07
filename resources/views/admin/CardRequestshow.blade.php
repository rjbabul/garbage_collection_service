 @extends('admin.admintemplate')

@section('content')


 
<!--Navigation bar Start--> 
 <div class="container">
   <h1 style="color: gray;font-weight: bold;">Card Request Pending</h1>
   <hr>
    @if(Session::get('success'))
           <div class="alert alert-success">
            {{ Session::get('success')}}
        @endif

         @if(Session::get('fail'))
           <div class="alert alert-danger">
            {{ Session::get('fail')}}
        @endif

   @foreach($request as $request)
  
   <div class="card-block">
                                <p style="font-weight: bold; color: #6185ec">General Information</p>
                                      <hr>
                                <div class="row">

                                    <div class="col-sm-6">

                                        <p class="m-b-10 f-w-600">Name</p>
                                        <h6 class="   f-w-400">{{$request->name}}</h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="  f-w-400">{{$request->username}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="    f-w-400">{{$request->cont_no}} </h6>
                                    </div>
                                </div>
                                <p class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="color:#6185ec; font-weight: bold;">Transaction Information</p>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Bkash Number</p>
                                        <h6 class="  f-w-400">{{$request->BkashNo}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">TnxId  </p>
                                        <h6 class="  f-w-400">{{$request->TnxID}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Amount  </p>
                                        <h6 class="  f-w-400">{{$request->amount}}</h6>
                                    </div>
                                    
                                 
                                    
                                </div>
                                
                        
                                <p class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="color:#6185ec; font-weight: bold;">Address</p>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Post</p>
                                        <h6 class="  f-w-400">{{$request->post}}</h6>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Thana/UZ</p>
                                        <h6 class="  f-w-400">{{$request->thana}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">District</p>
                                        <h6 class="  f-w-400">{{$request->dist}} </h6>
                                    </div>
                                </div>
                                
                            </div>

 <pre>
    <table  style="color: black;">
     
    
     <tbody>

       
         <tr style="margin:auto; height: 40px; text-align: center;">
            <td  >
            <form action="{{route('card_request_accept')}}" method="POST">
        @csrf
        <input type="hidden" name="email" value="{{$request->username}}">
        <button class="btn btn-success">Accept</button>
      </form>
    </td>
            <td>   
              
        <a class="dropdown-item" href="\card_request"> <button type=""> <button class="btn btn-warning">Back</button></a>
    </td>
         </tr>
     


     </tbody>
   </table>
</pre>
  @endforeach
@endsection