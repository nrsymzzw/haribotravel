<?php
 
$dataPoints1 = array(
	array("label"=> "Pulau Langkawi", "y"=> 36.12),
	array("label"=> "Pulau Manukan", "y"=> 34.87),
	array("label"=> "Pulau Rawa", "y"=> 40.30)
);
$dataPoints2 = array(
	array("label"=> "Pulau Langkawi", "y"=> 64.61),
	array("label"=> "Pulau Manukan", "y"=> 70.55),
	array("label"=> "Pulau rawa", "y"=> 72.50)
);
$dataPoints3 = array(
	array("label"=> "Pulau Langkawi", "y"=> 84.61),
	array("label"=> "Pulau Manukan", "y"=> 60.75),
	array("label"=> "Pulau Rawa", "y"=> 52.50)
);
	
?>

<?php

$dbhandle = new mysqli('localhost', 'root', '', 'haribotravel');
echo $dbhandle-> connect_error;

//State - Bar Chart
$query = "SELECT gen_desc, (SELECT COUNT(gen_desc) FROM client WHERE g.gen_desc = gen_desc) AS percentage FROM gender g WHERE gen_desc IN( SELECT gen_desc FROM gender WHERE g.gen_desc = gen_desc) ORDER BY percentage DESC";

$res= $dbhandle-> query($query);

//Gender - Pie Chart
$query2 = "SELECT state_desc , (SELECT COUNT(state_desc) FROM client WHERE a.state_desc = state_desc) AS percentage FROM state a WHERE state_desc IN( SELECT state_desc FROM client WHERE a.state_desc = state_desc) ORDER BY percentage DESC";

$res2= $dbhandle-> query($query2);

?>


<!DOCTYPE html>
<html>
<title>HARIBO TRAVEL HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">
	
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<head>
	
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['price', 'percentage'],

         <?php
			while ($row=$res->fetch_assoc())
			{
			  echo "['".$row['gen_desc']."',".$row['percentage']."],";
			}
        ?>
        ]);

        var options = {
          title: 'PERCENTAGE OF GENDER IN HARIBO TRAVEL'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
	
<div align="center">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['STATE' , 'TYPE OF STATE'],
          <?php
while ($row=$res2->fetch_assoc())
{
  echo "['".$row['state_desc']."',".$row['percentage']."],";
}
        ?>
        ]);
        
        var options = {
          chart: {
            title: 'TOTAL CLIENT FOR EACH STATE ',
            subtitle: 'IN YEAR 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
	
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">HARIBO TRAVEL</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
	
	<a href="admin_logout.php" class="w3-bar-item w3-button">LOG OUT</a>
    <a href="details.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> CLIENT INFO</a>
    <a href="report.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> SALES</a>
	<a href="adminProduct.php" class="w3-bar-item w3-button"><i class="fa fa-gift"></i> PACKAGES</a>
		
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
		<i class="fa fa-bars"></i>
    </a>
  </div>
</div>

	
	<script> //bar chart//
	window.onload = function () {

	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		theme: "light2",
		title:{
			text: "MONTHLY SALES FOR EACH PACKAGE"
		},
		legend:{
			cursor: "pointer",
			verticalAlign: "center",
			horizontalAlign: "right",
			itemclick: toggleDataSeries
		},
		data: [{
			type: "column",
			name: "Small",
			indexLabel: "{y}",
			yValueFormatString: "RM#0.##",
			showInLegend: true,
			dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
		},{
			type: "column",
			name: "Medium",
			indexLabel: "{y}",
			yValueFormatString: "RM#0.##",
			showInLegend: true,
			dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
		},{
			type: "column",
			name: "Large",
			indexLabel: "{y}",
			yValueFormatString: "RM#0.##",
			showInLegend: true,
			dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>	
		}]
	});
	chart.render();

	function toggleDataSeries(e){
		if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
			e.dataSeries.visible = false;
		}
		else{
			e.dataSeries.visible = true;
		}
		chart.render();
	}

	
			   
	}
	</script>
	
	<br><br><br><br>
	
	<a href="#home">
	<div id="chartContainer" style="height: 60%; width: 70%; margin: auto;"></div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
	<div id="columnchart_material" style="width: 800px; height: 500px; margin: auto;"></div>
	<br><br><br>
	
	<div id="piechart" style="width: 900px; height: 500px; margin: auto;"></div>
		
	
	<!-- Footer -->
	<footer class="w3-center w3-black w3-padding-64">
	  <div class="w3-xlarge w3-section">
		<i class="fa fa-facebook-official w3-hover-opacity"></i>
		<i class="fa fa-instagram w3-hover-opacity"></i>
		<i class="fa fa-snapchat w3-hover-opacity"></i>
		<i class="fa fa-pinterest-p w3-hover-opacity"></i>
		<i class="fa fa-twitter w3-hover-opacity"></i>
		<i class="fa fa-linkedin w3-hover-opacity"></i>
	  </div>
	  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
	</footer>
</body>
</html>