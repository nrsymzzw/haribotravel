<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Booking</title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">
</head>
<?php
	if (isset($_GET['c_id']))
			$c_id = $_GET['c_id'];
		else
			$c_id = 0;
	
	include 'dbconnect.php';
	mysqli_select_db($conn,'haribotravel');
	
	$query1 = "SELECT * FROM booking where c_id = '$c_id'";
	$result1 = mysqli_query($conn,$query1) or die('SQL Error');
	$row = mysqli_fetch_array($result1);
?>
<?php  
	
		//TO ADD DATA
		if (isset($_POST['addBooking']) && isset($_POST['c_id'])) {
			$b_id = addslashes($_POST['b_id']);
			$b_after = addslashes($_POST['b_after']);
			$b_before = addslashes($_POST['b_before']);
			$b_pax = addslashes($_POST['b_pax']);
			$b_location = addslashes($_POST['b_location']);
			$b_package = addslashes($_POST['b_package']);
			$c_id2 = addslashes($_POST['c_id']);
									
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query2 = "SELECT * FROM package WHERE b_id = '$b_id'";
			
			$result2 = mysqli_query($conn,$query2);
			$row2 = mysqli_fetch_array($result2);
			
			$b_price = $row2['p_price'];
			
			$query = "INSERT INTO booking (b_id, b_after, b_before, b_pax, b_location, b_package, c_id, b_price) VALUES
						('$b_id', '$b_after', '$b_before', '$b_pax', '$b_location', '$b_package', '$c_id2', '$b_price')";
			
			$result = mysqli_query($conn,$query);
			if ($result)
				echo "<script type='text/javascript'>alert('Add success')</script>";
			else
				echo "<script type='text/javascript'>alert('Add failed')</script>";
		}
?>
<body>
	
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">ADD BOOKING INFORMATION</h3>
  <div style="margin-top:45px">
	<form method="post" action="addbooking.php">
		<input type="hidden" name="b_id">
			<p>Date Before
				<input class="w3-input w3-border" type="date" name="b_before" required>
			</p>
			
			<p>Date After
				<input class="w3-input w3-border" type="date" name="b_after" required>
			</p>
		
			<p>Pax
				<input class="w3-input w3-border" type="text" name="b_pax" required>
			</p>
		
			<p>Location
			  <select class="w3-input w3-border" name="b_location" id="b_location">
					<option>CHOOSE ONE</option>
					<option>PULAU LANGKAWI - Rise and Shine</option>
					<option>PULAU MANUKAN - Hello There Sea Creatures</option>
					<option>PULAU RAWA - Let's Slide</option>
		  	  </select>
			</p>
		
	  <p>Package Name
				<select class="w3-input w3-border" name="b_package" id="b_package">
					<option>CHOOSE ONE</option>
					<option>Rise and Shine I</option>
					<option>Rise and Shine II</option>
					<option>Rise and Shine III</option>
					<option>Hello There Sea Creatures I
						<a value="<?php echo $row['b_price']; ?>"></a>
					</option>
					<option>Hello There Sea Creatures II</option>
					<option>Hello There Sea Creatures III</option>
					<option>Let's Slide I</option>
					<option>Let's Slide II</option>
					<option>Let's Slide III</option>
			  	</select>
	  </p>
		
	  <p>
		  <input type="hidden" name="c_id" value="<?php echo $c_id; ?>">
		  <button type="submit" name="addBooking" class="w3-button w3-black" value="submit">SUBMIT</button>
		  <button type="button" class="w3-button w3-black" onClick="history.back()">GO BACK</button>
	  </p>
		
    </form>
  </div>
</div>	
</body>
</html>