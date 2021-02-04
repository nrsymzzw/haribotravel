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
    <a href="#home" class="w3-bar-item w3-button w3-wide">HARIBO TRAVEL</a>
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
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> FEEDBACK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PACKAGES</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
		
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

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">FEEDBACK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PACKAGES</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
	<img src="pic/beachhome.jpg">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Explore the world now</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Explore the world now</span><br>
    <span class="w3-large">Start something that matters.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE TRAVEL AGENCY</h3>
	<h4 class="w3-center"><br>Customers can choose any places availabled for their next gateaway. We have also provide various kind of package for each travelling places. <br><br>It is affordable and suitable for all generations.</h4>
	<br>
  <p class="w3-center w3-large">Key features of our travel agency</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Monitor</p>
      <p>Every activites by the clients will be monitored and guided by us.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Satisfaction</p>
      <p>Fulfill your satisfaction to the fullest.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Exclusive</p>
      <p>High quality terms and services with an affordable prices.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Any problems or issues occured with the services will be solved as soon as possible.</p>
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE FEEDBACK</h3>
  <p class="w3-center w3-large">The ones who had experienced our services</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3>@makcikHasnah</h3>
          <p>"Saya suka layanan depa, friendly dan sangat membantu".</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3>@zullll_</h3>
          <p>"Service 5 star saya bagi".</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3>@kiara88</h3>
          <p>"Really satisfied with the package offered. Gonna repeat another time".</p>
        </div>
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3>@_chen37</h3>
          <p>"Awesome services".</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Packages Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">13+</span>
    <br>Happy Sponsors
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>


<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Haribo Travel will be your most satisfied travel agency you will ever meet.</p>
      <p>No scammer, no fake hope.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Trustworthy</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Friendly Service</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Reliable</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:80%">80%</div>
      </div>
    </div>
  </div>
</div>

<!-- Packages Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PACKAGES</h3>
  <p class="w3-large">Choose any travel places that fits your needs.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Pulau Langkawi</li>
        <li class="w3-padding-16"><b>Unlimited</b> pax of people</li>
        <li class="w3-padding-16"><b>Car</b> available</li>
        <li class="w3-padding-16">Multiple choice of <b>date</b> to choose</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"> < RM 100</h2>
          <span class="w3-opacity">additional per night</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="langkawi.php" class="w3-button w3-black w3-padding-large">More</a>
		  
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Pulau Manukan</li>
        <li class="w3-padding-16"><b>Unlimited</b> pax of people</li>
        <li class="w3-padding-16"><b>Car</b> available</li>
        <li class="w3-padding-16">Multiple choice of <b>date</b> to choose</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"> < RM 95</h2>
          <span class="w3-opacity">additional per night</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="manukan.php" class="w3-button w3-black w3-padding-large">More</a>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Pulau Rawa</li>
        <li class="w3-padding-16"><b>Unlimited</b> pax of people</li>
        <li class="w3-padding-16"><b>Car</b> available</li>
        <li class="w3-padding-16">Multiple choice of <b>date</b> to choose</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"> < RM 350</h2>
          <span class="w3-opacity">additional per night</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="rawa.php" class="w3-button w3-black w3-padding-large">More</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Visit us here:</p>
  <div style="margin-top:45px">
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 04 - 7525295</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: haribotra@gmail.com</p>
    <br>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
	

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>

</body>
</html>

