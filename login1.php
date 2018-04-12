<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="css/style11.css">
</head>
<body>
	<div id = "background">
		<img src="../">
	<div id="main-wrapper">
		<center>
			<img src="images/image1.png" class="image1"/>
		</center>
		
		<form class="myform" action="login.php" method="post">
			<label class="username"><b>Username:</label><br>
			<input name = "username" type ="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label class="password"><b>Password:</label><br>
			<input name ="password" type ="password" class="inputvalues" placeholder="Type your password" required/>
			<input name ="login" type ="submit" id ="login_btn" value="Login"/>
			<a class = "forgot" href="#" >Forgot Password?</a>
		</form>
		<?php
		if(isset($_POST['login']))
		{
			$username= $_POST['username'];
			$password= $_POST['password'];
			$query = "select * from admin WHERE username = '$username' AND password = '$password' ";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
				$_SESSION['username'] = $username;
				header('location:index.php');
				
			}
			else
			{
				//invalid
				echo'<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
		}
		
		?>
	</div>
	
</body>
</html>