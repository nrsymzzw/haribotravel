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


<?php
	session_start();
	
		include('dbconnect.php');
		mysqli_select_db($conn, 'haribotravel');
		$c_username = $_SESSION['c_username'];
		
		$query = "SELECT c_name, c_add, state_desc, c_city, c_poscode, c_numphone, c_email
		
		FROM client";
						 
		$result = mysqli_query($conn, $query) or die('SQL error');
		//$row = mysqli_fetch_array($result);
	
?>

	<?php
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
		?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Client Info</title>
	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">
</head>

	
		
	
<body>
	
	<br><br><br>
	
	<h3 border="0" style="margin-left: 140px; padding: 0px 10px;">Client Details</h3>
    <p></p>
	 <form>
	<table border="0" style="margin-left: 140px; padding: 0px 10px;">
		
	
		
	 <tr>
        <td>Name</td>
        <td>:
          <label>
            <?php echo $row['c_name'] ?></label></td>
      </tr>
      <tr>
        <td>Address</td>
        <td>:
          <label><?php echo $row['c_add'] ?></label></td>
      </tr>
	  <tr>
		<td>State</td>
        <td>:
          <label><?php echo $row['state_desc'] ?></label></td>
      </tr>
	  <tr>
	  <td>City</td>
        <td>:
          <label><?php echo $row['c_city'] ?></label></td>
      </tr>
	  <tr>
	  <td>Postal code</td>
        <td>:
          <label><?php echo $row['c_poscode'] ?></label></td>
      </tr>
	  <tr>
	  <td>Number phone</td>
        <td>:
          <label><?php echo $row['c_numphone'] ?></label></td>
      </tr>
	  <tr>
	  <td>Email</td>
        <td>:
          <label><?php echo $row['c_email'] ?></label></td>
      </tr>
		
		<?php
		}
	
	?>
	<br><br>
		
    </table>
		 <br><br>
</form>
	
	
	<br><br>
	
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