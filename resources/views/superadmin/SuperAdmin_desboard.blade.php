 @extends('superadmin.SuperAdminTemplate')

@section('content')

<h1>Dashboard</h1>
  
  <?php
   $total=$payment->January + $payment->February+$payment->March + $payment->April+$payment->May + $payment->June+$payment->July + $payment->August+$payment->September + $payment->October+$payment->November + $payment->December;
    $var=0;
    $r=0;
  ?>

   
 
 <div class="card-deck  "   >
  <div class="card bg-light">
    <div class="card-body text-center">
      <p class="card-text" style="  color: #4e73df; text-align: left; text-align: center;"><b>EARNINGS (MONTHLY)</b></p>
       <p class="card-text" style="  color: gray; text-align: left;text-align: center; "><b>{{$payment->November}}</b></p>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-center">
      <p class="card-text" style="  color: #1cc88a; text-align: left;text-align: center; "><b>EARNINGS (ENNUAL)</b></p>

      <p class="card-text" style="  color: gray; text-align: left; text-align: center;"><b>{{$total}}</b></p>
    </div>
  </div>
  
   
</div>

<div class="row " style="margin-top: 30px;">

  <div class= "col-7">
    <div class="card" style="width:100%; height: 430px;">
  <div class="card-header" style="color: #5abb6f;">
    <b>Earnings Overview</b>
  </div>
  <canvas id="myChart" style="width:100%; "></canvas>
<!--@json($payment->January )-->
<script>
var xValues = ["January", "February", "March", "April", "May","June","July","August","September","October","November","December"];
var yValues = [@json($payment->January ), @json($payment->February ), @json($payment->March ), @json($payment->April ), @json($payment->May ),@json($payment->June ),@json($payment->July ),@json($payment->August ),@json($payment->September ),@json($payment->October ),@json($payment->November ),@json($payment->December )];
var barColors = ["#ab7dbd", "#2c8e30","#e01dea","#ecc85b","#ea1ab29c","#f6c28f","#36b9cc","#1cc88a","#4e73df","#20c997","#6cbf69","#ce67a2"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Earning review in One Year"
    }
  }
});
</script>
</div>


  </div>
   <div class= "col-5">
     
    <div class="card" style="width: 100%;">
  <div class="card-header" style="color:#8963fb;">
    <b> Monthly Income ratio</b>
  </div>
<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Month', ' Income per Month'],
  ['January', @json($payment->January )],
  ['February', @json($payment->February )],
  ['March', @json($payment->March )],
  ['April', @json($payment->April )],
  ['May', @json($payment->May )],
  ['June', @json($payment->June )],
  ['July', @json($payment->July )],
  ['August', @json($payment->August )],
  ['September', @json($payment->September )],
  ['October', @json($payment->October )],
  ['November', @json($payment->November )],
  ['December', @json($payment->December )]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':430, 'height':380};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</div>

   </div>
</div>

</div>


</div>
 
</script>




@endsection