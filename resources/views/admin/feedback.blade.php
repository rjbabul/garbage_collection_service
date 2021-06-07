@extends('admin.admintemplate')

@section('content')
 
<!--Navigation bar Start-->
<div class="container">
<h1 style="color:#b96c65; font-weight: bold;"> Customer's FeedBack</h1>
<hr> 
    <div   style="font-size:20px;">
        @foreach($fdback as $fdback)

      
          <div class="card">
  <pre>
     Name: {{ $fdback->username}}                                  Date:     {{$fdback->created_at}}
 
     FeedBack:    {{$fdback->feedback}}  
     Explain: {{$fdback->discrive}}   
     <a  href=" {{route('feedbacklike',$fdback->id)}}" class="btn btn-success">like {{$fdback->like}}</a> 

</pre>
</div>
      

@endforeach
     </div>
</div>



@endsection