
<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Account</title>
	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">
</head>

<body>
	
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="hometemplate3.php" class="w3-bar-item w3-button w3-wide">HARIBO TRAVEL</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
		
	
	  <a href="admin_logout.php" class="w3-bar-item w3-button">LOG OUT</a>
      <a href="hometemplate3.php" class="w3-bar-item w3-button">ABOUT</a>
      <a href="hometemplate3.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> FEEDBACK</a>
      <a href="hometemplate3.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PACKAGES</a>
      <a href="hometemplate3.php" class="w3-bar-item w3-button">ACCOUNT</a>
		
		<div class="search-container">
			<form action="searchpackage0.php">
			  <button type="submit"><img src="pic/iconsearch.png" alt="search" width="25" height="25"></button>
			</form>
		</div>
		
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
	  
<br><br><br>
	
<h1 style="margin: 10px 15px;">BOOKING INFORMATION</h1>
	
<br>

 
  <table border="1px" class="w3-table w3-striped w3-hoverable">
    <tr class="w3-hover-red">
      <th>Date Before</th>
	  <th>Date After</th>
	  <th>Pax</th>
	  <th>Location</th>
	  <th>Package</th>
	  <th>Edit</th>
	  <th>Delete</th>
    <tr>
		
	<?php
		
	
		include('dbconnect.php');
		if (isset($_GET['b_id']))
			$b_id = $_GET['b_id'];
		else
			$b_id = 0;
		
		mysqli_select_db($conn, 'haribotravel');
		
		
		$query = "SELECT b_after, b_before, b_pax, b_location, b_package FROM booking b, client c WHERE b.b_id = c.c_id";
		$result = mysqli_query($conn,$query) or die('SQL Error');
	
	?>
		
		
	<?php
		
  		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
	?>
		
    </tr>

    <tr>
    
	  <td><?php echo $row['b_before']; ?></td>
	  <td><?php echo $row['b_after']; ?></td>
	  <td><?php echo $row['b_pax']; ?></td>
	  <td><?php echo $row['b_location']; ?></td>
	  <td><?php echo $row['b_package']; ?></td>
	  
	  <TD align="center">
			<a href="editbooking.php?b_id=<?php echo $row['b_id']; ?>">Edit</a>			
	  </TD>
		
      <TD align="center">
			<a href="deleteclient.php" onclick="return confirmation()">
				<script type="text/javascript">
					function confirmation() { return confirm ('Are you sure you want to delete?');}
				</script>Delete
			</a>
	  </TD>
		  
    </tr>
	  
	<script>
	function open_win()
	{
		document.location.href("booking.php");
	}
	</script>
	  
  	<?php
			
  		}
    ?>
	</table>
	 
	<br><br><br><br><br>
	
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