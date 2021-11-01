 @extends('admin.admintemplate')

@section('content')
         

  <div class="container">
  <div class="row">
  	@if(Session::get('success'))
           <div class="alert alert-success">
           {{ Session::get('success')}}
          @endif

            @if(Session::get('fail'))
              <div class="alert alert-danger">
                 {{ Session::get('fail')}}
              @endif
                                
  <div class="col-6"> <h1>Collection status </h1>  </div>
 <div class="col-6" style="margin-top: 10px;">

  <form action=" {{Route('reset')}} " method="post">
  	@csrf

  	  <input type="submit" name = "Update" value="Update" class="btn btn-success">
  </form>
</div>

  <hr>

</div>

 
    <div class="col-10" id='map' style='width: cover; height: 500px;'>
      <script>
  mapboxgl.accessToken = 'pk.eyJ1IjoicmpiYWJ1bCIsImEiOiJja3UydmY0NTUxbnh0MnZvcW94NmFzbXl6In0.9NAL5H9c01siH46UPF7URg';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [  89.6073728 , 24.1696768  ], // starting position
    zoom: 9 // starting zoom
  });


  map.addControl(new mapboxgl.NavigationControl());

  @foreach($marker as $markers)
     
      var marker = new mapboxgl.Marker({ color: ' {{ $markers->description }} ', rotation: 0 })
       .setLngLat([  @json($markers->longitude ), @json($markers->latitude )    ]).setPopup(
            new mapboxgl.Popup({ offset: 25 }) 
              .setHTML(
                   '<h3>{{$markers->name}}</h3><p>{{$markers->cont_no}}</p><p>{{$markers->dist}},{{$markers->thana}}</p> '
              )
          )
       .addTo(map);
      
 @endforeach


map.on('load', () => {
map.addSource('route', {
'type': 'geojson',
'data': {
'type': 'Feature',
'properties': {},
'geometry': {
'type': 'LineString',
'coordinates': [
   
    @foreach($marker as $markers)
       [  {!! json_encode($markers->latitude ) !!} ,{!! json_encode($markers->longitude ) !!}   ] ,
        
      @endforeach
    
 
]
}
}
});

map.addLayer({
'id': 'route',
'type': 'line',
'source': 'route',
'layout': {
'line-join': 'round',
'line-cap': 'round'
},
'paint': {
'line-color': '#888',
'line-width': 6
}
});
});


</script>


</div>

</div>

<!--- END BODY -- >
 
     <!-- footer  -->
     <br>
     <br>
   </div>
     <div>
     <section style="height:50px;"></section>
  <div class="row" style="text-align:center;">
    
  </div>
    <!----------- Footer ------------>
    
</div>
 @endsection