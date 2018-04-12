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
	<script src="jquery-3.3.1.min.js"></script>
</head>
<body background = "C:\xampp\htdocs\society\LoginPage\images\back.png">
	
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
			$query1 = "select * from admin WHERE username = '$username' AND password = '$password' ";
			$query2 = "select * from members WHERE username = '$username' AND password = '$password' ";
			//$query3 = "select * from staff WHERE username = '$username' AND password = '$password' ";
			$query_run1 = mysqli_query($con,$query1);
			$query_run2 = mysqli_query($con,$query2);
			//$query_run3 = mysqli_query($con,$query3);
			if(mysqli_num_rows($query_run1)>0)
			{
				//valid
				$_SESSION['username'] = $username;
				header('location:bill.php');
				
			}
			else if(mysqli_num_rows($query_run2)>0){
				$_SESSION['username'] = $username;
				$query4 = "select * from mprofile WHERE username = '$username'";
				$query_run4 = mysqli_query($con,$query4);
				if(mysqli_num_rows($query_run4)>0){
					header('location:notice.php');
				}
				else{
					header('location:index.php');
				}
			}
			/*else if(mysqli_num_rows($query_run3)>0){
				$_SESSION['username'] = $username;
				header('location:index.php');
			}*/
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