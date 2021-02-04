<!DOCTYPE html>
<html>
<head>
	<title> User signup using PHP and MYSQL</title>
	<link rel="stylesheet" type="text/css" href="style0.css">
	
</head>
	
<?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			$c_name = addslashes($_POST['c_name']);
			$c_add = addslashes($_POST['c_add']);
			$state_desc = addslashes($_POST['state_desc']);
			$c_city = addslashes($_POST['c_city']);
			$c_poscode = addslashes($_POST['c_poscode']);
			$c_numphone = addslashes($_POST['c_numphone']);
			$c_email = addslashes($_POST['c_email']);
			$gen_desc = addslashes($_POST['gen_desc']);
			$c_username = addslashes($_POST['c_username']);
			$c_pw = addslashes($_POST['c_pw']);
			$c_pw2 = addslashes($_POST['c_pw2']);
			
			
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query = "INSERT INTO client (c_name, c_add, state_desc, c_city, c_poscode, c_numphone, c_email, gen_desc, c_username, c_pw, c_pw2) VALUES
				('$c_name', '$c_add', '$state_desc', '$c_city', '$c_poscode', '$c_numphone', '$c_email', '$gen_desc', '$c_username', '$c_pw', '$c_pw2')";
			$result = mysqli_query($conn,$query);
			if ($result)
				echo "<script type='text/javascript'>alert('Add sucess')</script>";
			else
				echo "<script type='text/javascript'>alert('Add failed')</script>";
		}
?>
	
<body>
	<div class="header">
		<br><br><br><br><br>
		<h2 align="center">SIGN UP</h2>
	</div>

	<form method="post" action="signup.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="c_username" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="c_pw" required>
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="c_pw2" required>
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="c_name" required>		
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="c_add" required>		
		</div>
		<div class="input-group">
			<label>State</label>
			<select name="state_desc" id="state_desc" required>
				<option selected="selected">--NULL--</option>
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
		</div>
		<div class="input-group">
			<label>City</label>
			<input type="text" name="c_city" required>		
		</div>
		<div class="input-group">
			<label>Postal Code</label>
			<input type="text" name="c_poscode" required>		
		</div>
		<div class="input-group">
			<label>Number Phone</label>
			<input type="text" name="c_numphone" required>		
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="c_email" required>		
		</div>
		
		<br>
		<div class="gender1">
			<label>Gender</label>
			&nbsp;
			<input class="gender" type="radio" name="gen_desc" value="Male">Male
			&nbsp;
			<input class="gender" type="radio" name="gen_desc" value="Female">Female		
		</div>
		
		<br>
		<div class="input-group">
			<button type="submit" name="add" class="btn" value="submit">Submit</button>
			<button type="button" class="btn" onClick="history.back()">Go Back</button>
		</div>
		
		<br>
		<p>
			Already a member? &nbsp;<a href="login.php">Sign in</a>
		</p>
	</form>

	<footer>
	<br><br>
	</footer>
</body>
</html>