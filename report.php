<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Report</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">

<?php
	include 'dbconnect.php';
	mysqli_select_db($conn,'haribotravel');
	
	$query1 = "SELECT date_format (b_before, '%M %Y') AS date, sum(b_price)
				FROM booking
				GROUP BY date_format (b_before, '%M %Y')";
	
	$result1 = mysqli_query($conn,$query1) or die('SQL Error');
	$row = mysqli_fetch_array($result1);
?>
	
</head>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="hometemplate2.php" class="w3-bar-item w3-button w3-wide">HARIBO TRAVEL</a>
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
	
<br><br><br>
	
<h1 style="margin: 10px 15px;">SALES MONTHLY REPORT</h1>
	
<br>
	
	<table border="1px" class="w3-table w3-striped w3-hoverable">
    <tr class="w3-hover-red">
      <th>Month</th>
	  <th>Total Sales</th>
    
	</tr>
	
	<tr>
	<?php
		
  		while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC))
		{
	?>
	</tr>
	<tr>
    
	  <td><?php echo $row['date']; ?></td>
	  <td>RM<?php echo $row['sum(b_price)']; ?></td>
		
	</tr>
	
	<?php
			
  		}
    ?>
	</table>
	
	<br><br><br>
	
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