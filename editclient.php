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
		if (isset($_GET['c_id']))
			$c_id = $_GET['c_id'];
		else
			$c_id = 0;
		
		include 'dbconnect.php';
		mysqli_select_db($conn,'haribotravel');

		$query = "SELECT c_id, c_name, c_add, state_desc, c_city, c_poscode, c_numphone, c_email, gen_desc FROM client WHERE c_id= $c_id";
		$result = mysqli_query($conn,$query) or die('SQL error');
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		//to edit data
		if (isset($_POST['edit']) && isset($_POST['c_id'])){
			$c_id = addslashes($_POST['c_id']);
			$c_name = addslashes($_POST['c_name']);
			$c_add = addslashes($_POST['c_add']);
			$state_desc = addslashes($_POST['state_desc']);
			$c_city = addslashes($_POST['c_city']);
			$c_poscode = addslashes($_POST['c_poscode']);
			$c_numphone = addslashes($_POST['c_numphone']);
			$c_email = addslashes($_POST['c_email']);
			$gen_desc = addslashes($_POST['gen_desc']);			
						
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query = "UPDATE client SET
				c_id = '$c_id', 
				c_name = '$c_name', 
				c_add = '$c_add',
				state_desc = '$state_desc',
				c_city = '$c_city',
				c_poscode = '$c_poscode',
				c_numphone = '$c_numphone',
				c_email = '$c_email',
				gen_desc = '$gen_desc'
				WHERE c_id = '$c_id'";
		
			$result = mysqli_query($conn,$query);
			if ($result){
			
				echo "<script type='text/javascript'>alert('Edit success')</script>"; 
			    echo "<script type='text/javascript'>window.location = 'hometemplate3.php'</script>";}
			else
				echo "<script type='text/javascript'>alert('Edit failed')</script>";
		}

	

?>
	
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">EDIT CLIENT INFORMATION</h3>
  <div style="margin-top:45px">
	<form method="post" action="editclient.php">
		<input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>">
			<p>Name
				<input class="w3-input w3-border" type="text" name="c_name" maxlength="30" size="30" value="<?php echo $row['c_name']; ?>">
			</p>
	  
		<p>Address
			<input class="w3-input w3-border" type="text" name="c_add" maxlength="30" size="30" value="<?php echo $row['c_add']; ?>">
		</p>
		
		<p>State
			<select class="w3-input w3-border" name="state_desc" id="state_desc">
            <option selected="selected"></option>
            <option 
					<?php if($row[("state_desc")] == 'SELANGOR')
							 {
								 echo "selected";
							 }
					?> 
					>SELANGOR</option>
            <option
				<?php if($row[("state_desc")] == 'PERAK')
							 {
								 echo "selected";
							 }
					?> 
					>PERAK</option>
            <option
					<?php if($row[("state_desc")] == 'KEDAH')
							 {
								 echo "selected";
							 }
					?> 
					>KEDAH</option>
            <option
					<?php if($row[("state_desc")] == 'PERLIS')
							 {
								 echo "selected";
							 }
					?> 
					>PERLIS</option>
            <option
					<?php if($row[("state_desc")] == 'PULAU PINANG')
							 {
								 echo "selected";
							 }
					?> 
					>PULAU PINANG</option>
            <option
					<?php if($row[("state_desc")] == 'JOHOR')
							 {
								 echo "selected";
							 }
					?> 
					>JOHOR</option>
            <option
					<?php if($row[("state_desc")] == 'KELANTAN')
							 {
								 echo "selected";
							 }
					?> 
					>KELANTAN</option>
            <option
					<?php if($row[("state_desc")] == 'TERENGGANU')
							 {
								 echo "selected";
							 }
					?> 
					>TERENGGANU</option>
            <option
					<?php if($row[("state_desc")] == 'PAHANG')
							 {
								 echo "selected";
							 }
					?> 
					>PAHANG</option>
            <option
					<?php if($row[("state_desc")] == 'NEGERI SEMBILAN')
							 {
								 echo "selected";
							 }
					?> 
					>NEGERI SEMBILAN</option>
            <option
					<?php if($row[("state_desc")] == 'WILAYAH PERSEKUTUAN')
							 {
								 echo "selected";
							 }
					?> 
					>WILAYAH PERSEKUTUAN</option>
            <option
					<?php if($row[("state_desc")] == 'MELAKA')
							 {
								 echo "selected";
							 }
					?> 
					>MELAKA</option>
            <option
					<?php if($row[("state_desc")] == 'SABAH')
							 {
								 echo "selected";
							 }
					?> 
					>SABAH</option>
            <option
					<?php if($row[("state_desc")] == 'SARAWAK')
							 {
								 echo "selected";
							 }
					?> 
					>SARAWAK</option>
          </select>
		</p>
		
		<p>City
			<input class="w3-input w3-border" type="text" name="c_city" maxlength="50" size="30" value="<?php echo $row["c_city"]; ?>">
		</p>
		
		<p>Postal Code
			<input class="w3-input w3-border" type="text" name="c_poscode" maxlength="50" size="30" value="<?php echo $row["c_poscode"]; ?>">
		</p>
		
		<p>Number Phone
			<input class="w3-input w3-border" type="text" name="c_numphone" maxlength="50" size="30" value="<?php echo $row["c_numphone"]; ?>">
		</p>
		
		<p>Email
			<input class="w3-input w3-border" type="text" name="c_email" maxlength="50" size="30" value="<?php echo $row["c_email"]; ?>">
			</td>
		</p>
	
		<p>Gender
			<br>
			<input type="radio" name="gen_desc" value="Male"
					   <?php if($row[("gen_desc")] == 'Male')
							 {
								 echo "checked";
							 }
					?>
					>Male
				<br>
				<input type="radio" name="gen_desc" value="Female"
					   <?php if($row[("gen_desc")] == 'Female')
							 {
								 echo "checked";
							 }
					?>
					>Female
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