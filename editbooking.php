<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styletemplate.css">
</head>

<body>
	<?php
		if (isset($_GET['b_id']))
			$b_id = $_GET['b_id'];
		else
			$b_id = 0;
		
		include 'dbconnect.php';
		mysqli_select_db($conn,'haribotravel');

		$query = "SELECT b_id, b_after, b_before, b_pax, b_location, b_package FROM booking WHERE b_id= $b_id";
		$result = mysqli_query($conn,$query) or die('SQL error');
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		//to edit data
		if (isset($_POST['edit']) && isset($_POST['b_id'])){
			$b_id = addslashes($_POST['b_id']);
			$b_after = addslashes($_POST['b_after']);
			$b_before = addslashes($_POST['b_before']);
			$b_pax = addslashes($_POST['b_pax']);
			$b_location = addslashes($_POST['b_location']);
			$b_package = addslashes($_POST['b_package']);		
						
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query = "UPDATE booking SET
				b_id = '$b_id', 
				b_after = '$b_after', 
				b_before = '$b_before',
				b_pax = '$b_pax',
				b_location = '$b_location',
				b_package = '$b_package'
				where b_id = '$b_id'";
		
			$result = mysqli_query($conn,$query);
			if ($result){
			
				echo "<script type='text/javascript'>alert('Edit success')</script>"; 
			    echo "<script type='text/javascript'>window.location = 'booking.php'</script>";}
			else
				echo "<script type='text/javascript'>alert('Edit failed')</script>";
		}

	

?>
	
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">EDIT BOOKING INFORMATION</h3>
  <div style="margin-top:45px">
	<form method="post" action="editbooking.php">
		<input type="hidden" name="b_id" value="<?php echo $row['b_id']; ?>">
			<p>Date Before
				<input class="w3-input w3-border" type="text" name="b_before" maxlength="30" size="30" value="<?php echo $row['b_before']; ?>">
			</p>
	  
		<p>Date After
			<input class="w3-input w3-border" type="text" name="b_after" maxlength="30" size="30" value="<?php echo $row['b_after']; ?>">
		</p>
		
		<p>Pax
			<input class="w3-input w3-border" type="text" name="b_pax" maxlength="30" size="30" value="<?php echo $row['b_pax']; ?>">
		</p>
		
		<p>Location
			<select class="w3-input w3-border" name="b_location" id="b_location">
            <option selected="selected"></option>
            <option 
					<?php if($row[("b_location")] == 'PULAU LANGKAWI - Rise and Shine')
							 {
								 echo "selected";
							 }
					?> 
					>PULAU LANGKAWI - Rise and Shine</option>
            <option
				<?php if($row[("b_location")] == 'PULAU MANUKAN - Hello There Sea Creatures')
							 {
								 echo "selected";
							 }
					?> 
					>PULAU MANUKAN - Hello There Sea Creatures</option>
            <option
					<?php if($row[("b_location")] == "PULAU RAWA - Let's Slide")
							 {
								 echo "selected";
							 }
					?> 
					>PULAU RAWA - Let's Slide</option>
          </select>
		</p>
		
		<p>Package
			<select class="w3-input w3-border" name="b_package" id="b_package">
            <option selected="selected"></option>
            <option 
					<?php if($row[("b_package")] == 'Rise and Shine I')
							 {
								 echo "selected";
							 }
					?> 
					>Rise and Shine I</option>
			<option 
					<?php if($row[("b_package")] == 'Rise and Shine II')
							 {
								 echo "selected";
							 }
					?> 
					>Rise and Shine II</option>
			<option 
					<?php if($row[("b_package")] == 'Rise and Shine III')
							 {
								 echo "selected";
							 }
					?> 
					>Rise and Shine III</option>
            <option
				<?php if($row[("b_package")] == 'Hello There Sea Creatures I')
							 {
								 echo "selected";
							 }
					?> 
					>Hello There Sea Creatures I</option>
			<option
				<?php if($row[("b_package")] == 'Hello There Sea Creatures II')
							 {
								 echo "selected";
							 }
					?> 
					>Hello There Sea Creatures II</option>
			<option
				<?php if($row[("b_package")] == 'Hello There Sea Creatures III')
							 {
								 echo "selected";
							 }
					?> 
					>Hello There Sea Creatures III</option>
            <option
					<?php if($row[("b_package")] == "Let's Slide I")
							 {
								 echo "selected";
							 }
					?> 
					>Let's Slide I</option>
			<option
					<?php if($row[("b_package")] == "Let's Slide II")
							 {
								 echo "selected";
							 }
					?> 
					>Let's Slide II</option>
			<option
					<?php if($row[("b_package")] == "Let's Slide III")
							 {
								 echo "selected";
							 }
					?> 
					>Let's Slide III</option>
          </select>
		</p>
	
		<p>
			<button class="w3-button w3-black" type="submit" name="edit">UPDATE</button>
			<button type="button" class="w3-button w3-black" onClick="history.back()">GO BACK</button>
      	</p>
		
    </form>
  </div>
</div>	

</body>
</html>