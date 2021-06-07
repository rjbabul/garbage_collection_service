 @extends('usermanual.pagetemplate')

@section('content')
<div class="container">
  <h1 style="color:gray;">Customer's FeedBack</h1>
</div>
<hr>
     <div  class="  mr-top-20 bdc">
    <br>
    <!-- body  -->
    
     <div class="container" style="font-size:20px;">
        @foreach($data as $data)

      
          <div class="card">
  <pre>
     Name: {{ $data->username}}                                  Date:     {{$data->created_at}}
 
     FeedBack:    {{$data->feedback}}  
     Explain: {{$data->discrive}}   
     <a  href=" {{route('feedbacklike',$data->id)}}" class="btn btn-success">like {{$data->like}}</a> 

</pre>
</div>
      

@endforeach
     </div>

 
     <!-- footer  -->
     <br>
     <br>
   </div>
     <div>
     <section style="height:50px;"></section>
  <div class="row" style="text-align:center;">
    
  </div>
   @endsection