<?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			$p_datebefore = addslashes($_POST['p_datebefore']);
			$p_dateafter = addslashes($_POST['p_dateafter']);
			$p_pax = addslashes($_POST['p_pax']);
												
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query = "INSERT INTO package (p_datebefore, p_dateafter, p_pax) VALUES
				('$p_datebefore', '$p_dateafter', '$p_pax')";
			$result = mysqli_query($conn,$query);
			if ($result)
				echo "<script type='text/javascript'>alert('Add success')</script>";
			else
				echo "<script type='text/javascript'>alert('Add failed')</script>";
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
<link rel="stylesheet" type="text/css" href="stylelangkawi.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="hometemplate.php" class="w3-bar-item w3-button w3-wide">HARIBO TRAVEL</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
		
		<a class="w3-bar-item">
		<div class="dropdown">
		<button class="dropbtn" onclick="myFunction()">LOGIN<i class="fa fa-caret-down"></i></button>

			<div class="dropdown-content" id="myDropdown">
					<a href="login(a).php">ADMIN</a>
					<a href="login.php">CLIENT</a>
			</div>
		</div>
		</a>
      <a href="hometemplate.php" class="w3-bar-item w3-button">ABOUT</a>
      <a href="hometemplate.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> FEEDBACK</a>
      <a href="#hometemplate.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PACKAGES</a>
      <a href="hometemplate.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
		
		<div class="search-container">
			<form action="searchpackage2.php">
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
  <h3>PULAU RAWA - MERSING, JOHOR</h3>
	
  <p class="w3-large">
	  Located 16km off east coast of Johor, Pulau Rawa is a private and secluded island possessed by Johor Sultanate.
	  <br><br>
	  Besides well-known for extremely white fine sands on beach, the island is surrounded by mesmerising coral reefs that can be explored through snorkelling.
	  <br><br>
	  The interior of Pulau Rawa is covered completely with lush tropical rainforest, which are still the most mysterious and attracting part of it.
	  <br><br>
	  Sunbathe, snorkel, dive, swim and walk, Pulau Rawa is able to make your ideal vacation becomes real.
	  <br><br><br>
	  For Pulau Rawa, we have provide 3 packages as stated below. You can kindly choose any package you like. Feel free to contact us for more details about the packages.
	  <br><br>
	  Enjoy !
  </p>
	
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Hello There Sea Creatures I</li>
		<li class="w3-padding-16" class="w3-third w3-section"> <img src="pic/pulaurawa.jpg" alt="pack1" style="width:100%"> </li>
        <li class="w3-padding-16"><b>Below 5 </b> people</li>
        <li class="w3-padding-16"><b>Resort included</b></li>
		<li class="w3-padding-16"><b>Car included</b></li>
		<li class="w3-padding-16">
			<b>Ticket included</b><br>
				<span class="w3-opacity">1. Boat</span>
		</li>
		<li class="w3-padding-16">
          <h2 class="w3-wide">RM 215</h2>
          <span class="w3-opacity">per package</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <p> <button class="w3-button w3-block w3-black w3-padding-large" onclick="document.getElementById('sub').style.display='block'">Select</button>			
			</p>
			
			<div id="sub" class="w3-modal w3-animate-opacity">
				<div class="w3-modal-content" style="padding: 32px">
					<div class="w3-container w3-white">
						<i onClick="document.getElementById('sub').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
						<h2 class="w3-wide">NOTICE</h2>
						<p>You need to login to select the package.</p>
						<button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onClick="history.back()">Go Back</button>
					</div>
				</div>
			</div>
		  
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Hello There Sea Creatures II</li>
		<li class="w3-padding-16" class="w3-third w3-section"> <img src="pic/pulaurawa.jpg" alt="pack1" style="width:100%"> </li>
        <li class="w3-padding-16"><b>5 - Below 10</b> people</li>
        <li class="w3-padding-16"><b>Resort included</b></li>
		<li class="w3-padding-16"><b>Car included</b></li>
		<li class="w3-padding-16">
			<b>Ticket included</b><br>
				<span class="w3-opacity">1. Boat</span>
		</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">RM 315</h2>
          <span class="w3-opacity">per package</span>
        </li>
		<li class="w3-light-grey w3-padding-24">
          <p> <button class="w3-button w3-block w3-black w3-padding-large" onclick="document.getElementById('sub').style.display='block'">Select</button>			
			</p>
			
			<div id="sub" class="w3-modal w3-animate-opacity">
				<div class="w3-modal-content" style="padding: 32px">
					<div class="w3-container w3-white">
						<i onClick="document.getElementById('sub').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
						<h2 class="w3-wide">NOTICE</h2>
						<p>You need to login to select the package.</p>
						<button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onClick="history.back()">Go Back</button>
					</div>
				</div>
			</div>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Hello There Sea Creatures III</li>
		<li class="w3-padding-16" class="w3-third w3-section"> <img src="pic/pulaurawa.jpg" alt="pack1" style="width:100%"> </li>
        <li class="w3-padding-16"><b>Above 10</b> people</li>
        <li class="w3-padding-16"><b>Resort included</b></li>
		<li class="w3-padding-16"><b>Car included</b></li>
		<li class="w3-padding-16">
			<b>Ticket included</b><br>
				<span class="w3-opacity">1. Boat</span>
		</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">RM 570</h2>
          <span class="w3-opacity">per package</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <p> <button class="w3-button w3-block w3-black w3-padding-large" onclick="document.getElementById('sub').style.display='block'">Select</button>			
			</p>
			
			<div id="sub" class="w3-modal w3-animate-opacity">
				<div class="w3-modal-content" style="padding: 32px">
					<div class="w3-container w3-white">
						<i onClick="document.getElementById('sub').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
						<h2 class="w3-wide">NOTICE</h2>
						<p>You need to login to select the package.</p>
						<button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onClick="history.back()">Go Back</button>
					</div>
				</div>
			</div>
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