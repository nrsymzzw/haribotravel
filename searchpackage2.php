<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<br><br><br><br><br>
<title>Search Package</title>
	
	<style>
		.center {
		display: block;
		margin-left: auto;
		margin-right: auto;
		}
		
		.container0 {
			text-align: center;
		}
		
		.container {
			font-family: Arial, Helvetica, sans-serif;
    		background-color: lightgrey;
		}
		
		h2 {
			color: black;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 190;
			font-weight: bold;
		}
		
		@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

.container{
    padding: 10%;
    text-align: center;
}
#custom-search-input {
    margin:0;
    margin-top: 10px;
    padding: 0;
}
 
#custom-search-input .search-query {
    width:100%;
    padding-right: 3px;
    padding-left: 15px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 0;
}
 
#custom-search-input button {
    border: 0;
    background: none;
    /** belows styles are working good */
    padding: 2px 5px;
    margin-top: 2px;
    position: absolute;
    right:0;
    /* IE7-8 doesn't have border-radius, so don't indent the padding */
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color:#D9230F;
    cursor: unset;
    z-index: 2;
}
 
.search-query:focus{
    z-index: 0;   
}
		
		
	</style>
	
</head>

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
	
	
	
	<div class="container0">
		<div class="row">
	    <div class="col-12"><h2>Search Packages</h2></div>
	    <div class="col-12">
    	    <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" name="search" id="search" placeholder="Search" class="form-control" />
                    <span class="input-group-btn">
                        <button type="button" disabled>
                            <span class="fa fa-search"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	</div>
	</div>
	
	<br><br>
	
	<div class="container">
		<div id="result"></div>

		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

			<script>
			$(document).ready(function()
			{

			 load_data();

			 function load_data(query)
			 {
			  $.ajax({
			   url:"searchpackage.php",
			   method:"POST",
			   data:{query:query},
			   success:function(data)
			   {
				$('#result').html(data);
			   }
			  });
			 }
			 $('#search').keyup(function()
			 {
			  var search = $(this).val();
			  if(search != '')
			  {
			   load_data(search);
			  }
			  else
			  {
			   load_data();
			  }
			 });
			});
			
				$(document).ready(function(e){
				$('.search-panel .dropdown-menu').find('a').click(function(e) {
					e.preventDefault();
					var param = $(this).attr("href").replace("#","");
					var concept = $(this).text();
					$('.search-panel span#search_concept').text(concept);
					$('.input-group #search_param').val(param);
				});
			});
				
			</script>
		
		<script>
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
		
	</div>
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