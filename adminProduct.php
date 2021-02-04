<!DOCTYPE html>
<html>
<title>HARIBO TRAVEL HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">
	
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
	
<h1 style="margin: 10px 15px;">LIST OF HARIBO TRAVEL'S PACKAGE</h1>
	
<br>
	
<table border="1px" class="w3-table w3-striped w3-hoverable">
<tr class="w3-hover-red">
	<th>Package Name</th>
	<th>Location</th>
	<th>Price (RM) </th>
	<th>Edit</th>
	<th colspan="2">Delete</th>
</tr>
	<?php
	include('connectdb.php');
	if(!isset($_POST['submit'])){
		$sql = "SELECT * FROM package";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row['p_name']."</td>";
				echo "<td>".$row['p_name2']."</td>";
				echo "<td>".$row['p_price']."</td>";
				
				echo '<td width="50px" align="center">
						<a href="editpackage.php?p_id='. $row['p_id'].' ">'."Edit". "</a>
					  </td>";
				
				echo '<td width="50px" align="center">
						<a href="delete.php?p_id='. $row['p_id'].'">'."Delete". "</a>
						</a>
					  </td>";
				
				echo "</tr>";
			}
		}
	}
?>
</table>

<br><br>
	
<form>
	<a href="addpackage.php"><input type="button" style="padding: 10px; margin: 0 15px; border-radius: 12px; background-color: black; color: white;" name="add" value="Add Package"></a>
</form>
	
	<br>
	
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