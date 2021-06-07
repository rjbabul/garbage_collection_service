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
     Name: {{ $fdback->name}}                                  Date:     {{$fdback->created_at}}
     
     Type:    {{$fdback->type}}  
     Complain: {{$fdback->complain}}   
     <a  href=" {{route('user_profile',$fdback->email)}}"  class="btn btn-success">Customer Profile </a> 

</pre>
</div>
      

@endforeach
     </div>
</div>




@endsection