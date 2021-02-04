<?php
				// to retrieve data		
		if (isset($_GET['p_id'])) {
			$p_id = $_GET['p_id'];
			
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$query = "DELETE FROM package WHERE p_id='$p_id'";
			$result = mysqli_query($conn,$query) or die('SQL ERROR 2');
			
			if ($result){
				echo "<script type='text/javascript'>alert('Delete Success')</script>";
				echo '<script type="text/javascript">
						   window.location = "adminProduct.php"
					  </script>';	}
			else
				echo "<script type='text/javascript'>alert('Delete Failed')</script>";
				
			
		}
		?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>