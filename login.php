<?php
	ob_start();
	$message = "";
	if ( isset ($_POST['login']))
	{
		$c_username = $_POST['c_username'];
		$c_pw = $_POST['c_pw'];
		if ($c_username != "" && $c_pw != "")
		{
			include 'dbconnect.php';
			mysqli_select_db($conn,'haribotravel');
			
			$sql = "SELECT c_username FROM client
				WHERE c_username = '$c_username' AND c_pw = '$c_pw'";
			$result = mysqli_query($conn,$sql) or die('Query failed');
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if (mysqli_num_rows($result) ==1)
			{
				session_start();
				$_SESSION['isLogged_in'] = true;
				$_SESSION['c_username'] = $row['c_username'];
				$message = 'Logged-in successfully';
				if ($_SESSION['c_username'] = $row['c_username'])
				header("Location: hometemplate3.php");
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
			<input type="text" name="c_username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="c_pw">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
			<button type="button" class="btn" onClick="history.back()">Go Back</button>
		</div>
		<p>
			New member?<a href="signup.php">&nbsp;Sign up</a>
		</p>
	</form>
	<?php echo $message ?>								   

</body>
</html>