<!doctype html>
<html>
<head>
<meta charset="iso-8859-1" />
<title>Client Information</title>
	
	<link rel="stylesheet" type="text/css" href="stylenavbar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			$c_name = addslashes($_POST['c_name']);
			$c_add = addslashes($_POST['c_add']);
			$c_state = addslashes($_POST['c_state']);
			$c_city = addslashes($_POST['c_city']);
			$c_poscode = addslashes($_POST['c_poscode']);
			$c_numphone = addslashes($_POST['c_numphone']);
			$c_email = addslashes($_POST['c_email']);
			$c_gender = addslashes($_POST['c_gender']);
			$c_datebefore = addslashes($_POST['c_datebefore']);
			$c_dateafter = addslashes($_POST['c_dateafter']);
			$c_pax = addslashes($_POST['c_pax']);
			
			
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query = "INSERT INTO client (c_name, c_add, c_state, c_city, c_poscode, c_numphone, c_email, c_gender, c_datebefore, c_dateafter, c_pax) VALUES
				('$c_name', '$c_add', '$c_state', '$c_city', '$c_poscode', '$c_numphone', '$c_email', '$c_gender', '$c_datebefore', '$c_dateafter', '$c_pax')";
			$result = mysqli_query($conn,$query);
			if ($result)
				echo "<script type='text/javascript'>alert('Add sucess')</script>";
			else
				echo "<script type='text/javascript'>alert('Add failed')</script>";
		}
?>


<body>
	<br>
	<img src="pic/logo1.png" alt="logo" class="center"><br>
	
	<div class="topnav">
	  <a class="active" href="home.php">Home</a>
	  <a href="about.php">About</a>
	  <a href="contact.php">Contact</a>
		
	<div class="dropdown">
		<button class="dropbtn" onclick="myFunction()">Login
				<i class="fa fa-caret-down"></i>
		</button>

		<div class="dropdown-content" id="myDropdown">
				<a href="login(a).php">Admin</a>
				<a href="login.php">Client</a>
		</div>
	</div>
		
	  <a href="signup.php">Sign Up</a>
		
	  <div class="search-container">
		<form action="/action_page.php">
		  <input type="text" placeholder="Search.." name="search">
		  <button type="submit"><i class="fa fa-search"></i></button>
		</form>
	  </div>
		
	</div>
	
	<br><br>
	
<div align="center">
	
	<h1 align="center">Client Information</h1><br>
	<fieldset style="height: 70%; width: 40%; margin: auto;">
	<form method="post" action="addclient.php">
		<table width="450px" class="center1">
		
		<tr align="center">
			<td>Name </td>
			<td><input type="text" name="c_name" maxlength="30" size="30" required>
			</td>
		</tr>
		<tr align="center">
			<td><br>Address	</td>
			<td><input type="text" name="c_add" maxlength="50" size="30" required>
			</td>
		</tr>
		<tr align="center" maxlength="50" size="30">
			<td><br>State</td>
			<td><select name="c_state" id="c_state" required>
            <option selected="selected">NULL</option>
            <option>Selangor</option>
            <option>Perak</option>
            <option>Kedah</option>
            <option>Perlis</option>
            <option>Pulau Pinang</option>
            <option>Johor</option>
            <option>Kelantan</option>
            <option>Terengganu</option>
            <option>Pahang</option>
            <option>Negeri Sembilan</option>
            <option>Wilayah Persekutuan</option>
            <option>Melaka</option>
            <option>Sabah</option>
            <option>Sarawak</option>
          </select>
			</td>
		</tr>
		<tr align="center">
			<td><br>City</td>
			<td><input type="text" name="c_city" maxlength="50" size="30" required>
			</td>
		</tr>
		<tr align="center">
			<td><br>Postal Code</td>
			<td><input type="text" name="c_poscode" maxlength="50" size="30" required>
			</td>
		</tr>
		<tr align="center">
			<td><br>Number phone</td>
			<td><input type="text" name="c_numphone" maxlength="50" size="30" required>
			</td>
		</tr>
		<tr align="center">
			<td><br>Email</td>
			<td><input type="text" name="c_email" maxlength="50" size="30" required>
			</td>
		</tr>
		<tr align="center">
			<td><br>Gender</td>
			<td>
				<input type="radio" name="c_gender" value="Male" checked> Male
				<input type="radio" name="c_gender" value="Female" checked> Female
			</td>
		</tr>
		<tr align="center">
			<td><br>Pax</td>
			<td><input type="text" name="c_pax" maxlength="50" size="30" required>
			</td>
		</tr>
		<tr align="center">
			<td><br>Date Before</td>
			<td><input type="date" name="c_datebefore" maxlength="50" size="30" required>
			</td>
		</tr>
		<tr align="center">
			<td><br>Date After</td>
			<td><input type="date" name="c_dateafter" maxlength="50" size="30" required>
			</td>
		</tr>
		<tr align="center"><br>
			<td colspan="2"><input type="submit" name="add" value="submit">
			</td>
		</tr>		
		</table>
	</form>
	</fieldset>
	
	<footer> <br><br><br> </footer>
	
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
	
</body>
</html>