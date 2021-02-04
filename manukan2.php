<?php
if (!isset($_SESSION['isLogged_in']))
{
$_SESSION['isLogged_in'] = FALSE;
$_SESSION['c_username'] = '';
$c_username = $_SESSION['c_username'];
}
?>
	  
<?php
	session_start();	
	
	if(isset($_SESSION['c_username']))
	{
		include('dbconnect.php');
		mysqli_select_db($conn, 'haribotravel');
		$c_username = $_SESSION['c_username'];
		
		$query = "SELECT * FROM client
						 where c_username = '$c_username'";
						 
		$result = mysqli_query($conn, $query) or die('SQL error');
		$row = mysqli_fetch_array($result);
	}
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
      <a href="hometemplate3.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
		
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
	
	<!-- MAIN (Center website) -->
<div class="main">

<!-- Packages Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PULAU MANUKAN - KOTA KINABALU, SABAH</h3>
  <p class="w3-large">
	  Manukan offers clear waters and beautiful coral reefs. Shaped like a dolphin, the island is 1½ km long. Blessed with a long stretch of white sandy beach promising hours of sea, sand & fun! Guests can choose to stay in one of the single or double storey chalets. All chalets overlook the South China Sea and a spectacular sunset is almost a daily affair.
	  <br><br>
      The island is also ideal for small to medium sized group meetings. Have a solitary time for yourself at the Look-Out Point and watch the beautiful sunset of Borneo.
	  <br><br>
      The island is accessible from downtown Kota Kinabalu by boat. Journey takes about 20 minutes from the jetty of Jesselton Point (formally the location of Sabah Port Authority)
 	  <br><br>
	  Pulau Manukan is located off the coast of downtown Kota Kinabalu.
	  <br><br><br>
	  For Pulau Manukan, we have provide 3 packages as stated below. You can kindly choose any package you like. Feel free to contact us for more details about the packages.
	  <br><br>
	  Enjoy !</p>
	
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Hello There Sea Creatures I</li>
		<li class="w3-padding-16" class="w3-third w3-section"> <img src="pic/manukan.jpg" alt="pack1" style="width:100%"> </li>
        <li class="w3-padding-16"><b>Below 5 </b> people</li>
        <li class="w3-padding-16"><b>Homestay included</b></li>
        <li class="w3-padding-16"><b>Car included</b></li>
		<li class="w3-padding-16">
			<b>Ticket included</b><br>
				<span class="w3-opacity">1. Island Hopping</span>
		</li>
	       <li class="w3-padding-16">
          <h2 class="w3-wide">RM 170</h2>
          <span class="w3-opacity">per package</span>
        </li>
        
		<li class="w3-light-grey w3-padding-24">
			<p>
			<form>
				<a href="addbooking.php?c_id=<?php echo $row['c_id']; ?>"><input class="w3-button w3-block w3-black w3-padding-large" type="button" name="add" value="Let's Go !"></a>
			</form>
			</p>
		</li>
      </ul>
    </div>
	  
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Hello There Sea Creatures II</li>
		<li class="w3-padding-16" class="w3-third w3-section"> <img src="pic/manukan.jpg" alt="pack1" style="width:100%"> </li>
        <li class="w3-padding-16"><b>5 - Below 10</b> people</li>
        <li class="w3-padding-16"><b>Homestay included</b></li>
        <li class="w3-padding-16"><b>Car included</b></li>
		<li class="w3-padding-16">
			<b>Ticket included</b><br>
				<span class="w3-opacity">1. Island Hopping</span>
		</li>
		<li class="w3-padding-16">
          <h2 class="w3-wide">RM 190</h2>
          <span class="w3-opacity">per package</span>
        </li>
		
		<li class="w3-light-grey w3-padding-24">
			<p>
			<form>
				<a href="addbooking.php?c_id=<?php echo $row['c_id']; ?>"><input class="w3-button w3-block w3-black w3-padding-large" type="button" name="add" value="Let's Go !"></a>
			</form>
			</p>
		</li>
      </ul>
    </div>
	  
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Hello There Sea Creatures III</li>
		<li class="w3-padding-16" class="w3-third w3-section"> <img src="pic/manukan.jpg" alt="pack1" style="width:100%"> </li>
        <li class="w3-padding-16"><b>Above 10</b> people</li>
        <li class="w3-padding-16"><b>Homestay included</b></li>
        <li class="w3-padding-16"><b>Car included</b></li>
		<li class="w3-padding-16">
			<b>Ticket included</b><br>
				<span class="w3-opacity">1. Island Hopping</span>
		</li>
       <li class="w3-padding-16">
          <h2 class="w3-wide">RM 245</h2>
          <span class="w3-opacity">per package</span>
        </li>
        
		<li class="w3-light-grey w3-padding-24">
			<p>
			<form>
				<a href="addbooking.php?c_id=<?php echo $row['c_id']; ?>"><input class="w3-button w3-block w3-black w3-padding-large" type="button" name="add" value="Let's Go !"></a>
			</form>
			</p>
		</li>
      </ul>
    </div>
  </div>
</div>
	
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