@extends('admin.admintemplate')

@section('content')
 
<!--Navigation bar Start--> 

<h1>Dashboard</h1>
 <div class="card-deck  "   >
  <div class="card bg-light">
    <div class="card-body text-center">
      <p class="card-text" style="  color: #4e73df; text-align: left; "><b>EARNINGS (MONTHLY)</b></p>
       <p class="card-text" style="  color: gray; text-align: left; "><b>20,000</b></p>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-center">
      <p class="card-text" style="  color: #1cc88a; text-align: left; "><b>EARNINGS (ENNUAL)</b></p>
      <p class="card-text" style="  color: gray; text-align: left; "><b>4,00,000</b></p>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-center">
      <p class="card-text" style="  color: #36b9cc; text-align: left; "><b>  Request Pending</b></p>
        <p class="card-text" style="  color: gray; text-align: left; "><b>1</b></p>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-center">
      <p class="card-text" style="  color: #f6c28f; text-align: left; "><b>Recharge Pending</b></p>
       <p class="card-text" style="  color: gray; text-align: left; "><b>1</b></p>
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

<script>
var xValues = ["January", "February", "March", "April", "May","June","July","August","September","October","November","December"];
var yValues = [55000, 49000, 44000, 24000, 25000,30000,50000,30000,60000,40000,35000,42000];
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
  ['January', 55000],
  ['February', 49000],
  ['March', 44000],
  ['April', 24000],
  ['May', 25000],
  ['June', 30000],
  ['July', 55000],
  ['August', 30000],
  ['September', 60000],
  ['October', 40000],
  ['November', 35000],
  ['December', 42000]
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