<?php
	ob_start();
	$message = "";
	if ( isset ($_POST['login']))
	{
		$a_id = $_POST['a_id'];
		$a_pw = $_POST['a_pw'];
		if ($a_id != "" && $a_pw != "")
		{
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$sql = "SELECT a_id, a_pw FROM admin
				WHERE a_id = '$a_id' AND a_pw = '$a_pw'";
			$result = mysqli_query($conn,$sql) or die('Query failed');
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if (mysqli_num_rows($result) ==1)
			{
				session_start();
				$_SESSION['isLogged_in'] = true;
				$_SESSION['a_id'] = $row['a_id'];
				$message = 'Logged-in successfully';
				if ($_SESSION['a_id'] = $row['a_id'])
				header("Location: hometemplate2.php");
			}
			else
			{
				$message = 'WRONG USERNAME OR PASSWORD';
			}
		}
		
		else
		{
			$message = 'PLEASE RE-INPUT YOUR USERNAME AND PASSWORD';
		}
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title> User signup using PHP and MYSQL</title>
	<link rel="stylesheet" type="text/css" href="style0.css">
</head>
	
<body>
	
	<div class="header">
		<br><br><br><br><br>
		<h2 align="center">LOGIN</h2>
	</div>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="a_id">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="a_pw">
		</div>
		
		<br>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
			<button type="button" class="btn" onClick="history.back()">Go Back</button>
		</div>
		
		<br>
		<p>
			New member?<a href="signup.php">Sign up</a>
		</p>
	</form>
	<?php echo $message ?>
									   
</body>
</html>