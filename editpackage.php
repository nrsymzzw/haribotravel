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
			
		if (isset($_GET['p_id']))
			$p_id = $_GET['p_id'];
		else
			$p_id = 0;
		
		include 'dbconnect.php';
		mysqli_select_db($conn,'haribotravel');

		$query = "SELECT p_id, p_name, p_name2, p_price FROM package WHERE p_id= $p_id";
		$result = mysqli_query($conn,$query) or die('SQL error');
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		//to edit data
		if (isset($_POST['edit']) && isset($_POST['p_id'])){
			$p_id = addslashes($_POST['p_id']);
			$p_name = addslashes($_POST['p_name']);
			$p_name2 = addslashes($_POST['p_name2']);
			$p_price = addslashes($_POST['p_price']);
			
						
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query = "UPDATE package SET
				p_id = '$p_id', 
				p_name = '$p_name', 
				p_name2 = '$p_name2',
				p_price = '$p_price'
				WHERE p_id = '$p_id'";
		
			$result = mysqli_query($conn,$query);
			if ($result){
			
				echo "<script type='text/javascript'>alert('Edit success')</script>"; 
			    echo "<script type='text/javascript'>window.location = 'adminProduct.php'</script>";}
			else
				echo "<script type='text/javascript'>alert('Edit failed')</script>";
			
		}

	

?>
	
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">EDIT PACKAGE INFORMATION</h3>
  <div style="margin-top:45px">
	<form method="post" action="editpackage.php">
		<input type="hidden" name="p_id" value="<?php echo $row['p_id']; ?>">
			<p>Location
				<input class="w3-input w3-border" type="text" name="p_name" maxlength="30" size="30" value="<?php echo $row['p_name']; ?>">
			</p>
	  
		<p>Package Name
			<input class="w3-input w3-border" type="text" name="p_name2" maxlength="30" size="30" value="<?php echo $row['p_name2']; ?>">
		</p>
		
		<p>Price
			<input class="w3-input w3-border" type="text" name="p_price" maxlength="30" size="30" value="<?php echo $row['p_price']; ?>">
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