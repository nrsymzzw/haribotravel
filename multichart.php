<?php
 
$dataPoints1 = array(
	array("label"=> "Langkawi", "y"=> 36.12),
	array("label"=> "Pulau Manukan", "y"=> 34.87),
	array("label"=> "Pulau Rawa", "y"=> 40.30)
);
$dataPoints2 = array(
	array("label"=> "Langkawi", "y"=> 64.61),
	array("label"=> "Pulau Manukan", "y"=> 70.55),
	array("label"=> "Pulau rawa", "y"=> 72.50)
);
$dataPoints3 = array(
	array("label"=> "Langkawi", "y"=> 84.61),
	array("label"=> "Pulau Manukan", "y"=> 60.75),
	array("label"=> "Pulau Rawa", "y"=> 52.50)
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script> //bar chart//
	window.onload = function () {

	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		theme: "light2",
		title:{
			text: "Monthly Sales for Each Package"
		},
		legend:{
			cursor: "pointer",
			verticalAlign: "center",
			horizontalAlign: "right",
			itemclick: toggleDataSeries
		},
		data: [{
			type: "column",
			name: "Package A",
			indexLabel: "{y}",
			yValueFormatString: "RM#0.##",
			showInLegend: true,
			dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
		},{
			type: "column",
			name: "Package B",
			indexLabel: "{y}",
			yValueFormatString: "RM#0.##",
			showInLegend: true,
			dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
		},{
			type: "column",
			name: "Package C",
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
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   