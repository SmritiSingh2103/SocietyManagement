<?php
		require 'dbconfig/config.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/style11.css">
</head>
<body style="background-color:#8e44ad">

	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<img src="images/image1.png" class="image1"/>
		</center>
		
		<form class="myform" action="register.php" method="post">
			<label class="username"><b>Username:</label>
			<input name="username" type ="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label class="password"><b>Password:</label>
			<input name="password" type ="password" class="inputvalues" placeholder="Your password" required/><br>
			<label id="confirmpass"><b>Confirm Password:</label>
			<input name="cpassword" type ="password" class="inputvalues" placeholder="Confirm password" required/>
			<input name="submit_btn" type ="submit" id ="signup_btn" value="Sign Up"/><br>
			<a href="login.php"><input type ="button" id ="back_btn" value="<< Back to Login"/><br>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo'<script type="text/javascript"> alert("Sign up button clicked") </script> ';
				$username= $_POST['username'];
				$password= $_POST['password'];
				$cpassword= $_POST['cpassword'];
				
				if($password == $cpassword)
				{
						$query = "select * from admin WHERE username='$username' ";
						$query_run = mysqli_query($con,$query);
						
						if(mysqli_num_rows($query_run)>0)
						{
							//there is already a user with same username
							echo'<script type="text/javascript"> alert("User already exists...try another username") </script>';
						}
						else
						{	
							$query= "insert into admin values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							
							if($query_run)
							{
								echo'<script type="text/javascript"> alert("user registered...go to login page to login") </script>';
							}
							else
							{
								echo'<script type="text/javascript"> alert("Error") </script> ';
							}
						}	
					
				}
				else
				{
					echo'<script type="text/javascript"> alert("Password and confirm password does not match") </script> ';
				}				
			}
		?>
	</div>
</body>
</html>