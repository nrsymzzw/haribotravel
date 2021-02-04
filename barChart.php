<?php

$dbhandle = new mysqli('localhost', 'root', '', 'haribotravel');
echo $dbhandle-> connect_error;

$query = "SELECT state_desc , (SELECT COUNT(state_desc) FROM client WHERE a.state_desc = state_desc) AS percentage FROM state a WHERE state_desc IN( SELECT state_desc FROM client WHERE a.state_desc = state_desc) ORDER BY percentage DESC";

$res= $dbhandle-> query($query);

?>



<html>
  <head>
	  <div align="center">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['STATE' , 'TYPE OF STATE'],
          <?php
while ($row=$res->fetch_assoc())
{
  echo "['".$row['state_desc']."',".$row['percentage']."],";
}
        ?>
        ]);
        
        var options = {
          chart: {
            title: 'PERCENTAGE OF CLIENT BY STATE ',
            subtitle: 'IN YEAR 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>