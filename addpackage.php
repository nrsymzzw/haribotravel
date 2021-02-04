<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Package</title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">
</head>
<?php   
		//TO ADD DATA
		if (isset($_POST['addPackage'])) {
			$p_id = addslashes($_POST['p_id']);
			$p_name2 = addslashes($_POST['p_name2']);
			$p_name = addslashes($_POST['p_name']);
			$p_price = addslashes($_POST['p_price']);
									
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query = "INSERT INTO package (p_id, p_name2, p_name, p_price) VALUES
				('$p_id', '$p_name2', '$p_name', '$p_price')";
			$result = mysqli_query($conn,$query);
			if ($result)
				echo "<script type='text/javascript'>alert('Add success')</script>";
			else
				echo "<script type='text/javascript'>alert('Add failed')</script>";
		}
?>
<body>
	
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
	  <h3 class="w3-center">ADD PACKAGE INFORMATION</h3>
	  <div style="margin-top:45px">
		<form method="post" action="addpackage.php">
			
			<input type="hidden" name="p_id" required>
			
			<p>Location
				<input class="w3-input w3-border" type="text" name="p_name2" required>
			</p>
			
			<p>Package Name
				<input class="w3-input w3-border" type="text" name="p_name" required>
			</p>

			<p>Price
				<input class="w3-input w3-border" type="text" name="p_price" required>
			</p>

			<p>
				<button type="submit" name="addPackage" class="w3-button w3-black" value="submit">SUBMIT</button>
				<button type="button" class="w3-button w3-black" onClick="history.back()">GO BACK</button>
			</p>
		</form>
	  </div>
	</div>
	
</body>
</html>