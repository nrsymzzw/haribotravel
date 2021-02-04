<?php

$dbhandle = new mysqli('localhost', 'root', '', 'haribotravel');
echo $dbhandle-> connect_error;

$query = "SELECT gen_desc, (SELECT COUNT(gen_desc) FROM client WHERE g.gen_desc = gen_desc) AS percentage FROM gender g WHERE gen_desc IN( SELECT gen_desc FROM gender WHERE g.gen_desc = gen_desc) ORDER BY percentage DESC";
$res= $dbhandle-> query($query);

?>



<html>
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
          title: 'Percentage of gender in Haribo Travel'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>