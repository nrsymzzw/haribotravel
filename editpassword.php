<?php
if (!isset($_SESSION['isLogged_in']))
{
	
include ("dbconnect.php");
mysqli_select_db($conn,'haribotravel');	
$_SESSION['isLogged_in'] = FALSE;
$_SESSION['c_username'] = 'guest';
}
?>

<?php
	session_start();
	
	if(isset($_SESSION['c_id']))
	{
		include ("dbconnect.php");
	mysqli_select_db($conn,'haribotravel');
		$c_username = $_SESSION['c_username'];
		
		$query = "SELECT * FROM client
						 where c_username = '$c_username'";
		$result = mysqli_query($conn, $query) or die ('SQL error');
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change password</title>
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
	
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CHANGE PASSWORD</h3>
  <div style="margin-top:45px">
    <form id="form" name="form" method="post" action="pro_editpassword.php">
    
		<p>Old Password 
			<input class="w3-input w3-border" name="oldpw" type="text" id="oldpw" maxlength="10" required />
		</p>
		
		<p>New Password 
			<input class="w3-input w3-border" name="newpw" type="text" id="newpw" maxlength="10" required />
		</p>
		
		<p>Confrim New Password 
			<input class="w3-input w3-border" name="newpw2" type="text" id="newpw2" maxlength="10" required />
		</p>
		
		<p>
			<button class="w3-button w3-black" type="submit" name="submit" id="submit" value="Submit">UPDATE</button>
			<button type="button" class="w3-button w3-black" onClick="history.back()">GO BACK</button>
      	</p>
     </form>
		<p><?php //if(count($data0) != 0){ 
			//do{
			//$pelajar = $data0['std_matrik'];
			//if($pelajar != 0)
			//{
				?>
				<!--<input type="button" value="Kemaskini" onclick="open_win()">-->
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