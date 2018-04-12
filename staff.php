<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style10.css" type="text/css"/>
	<title>Profile Details</title>
</head>
<body>
<nav>
<ul id="menuContainer">
<?php?>
</ul>
</nav>
<div id="bodyContainer">
	
	<center>
		<h4>Welcome
		<?php echo $_SESSION['username'] ?>
		</h4>
	</center>
	<h2>Profile Details</h2>
	
	<form class="myform" action="staff.php" method="post">
	
	<label id="name1"><b>Name:</label>
	<input name = "name" type ="text" id="name2" required/><br>
	<label id="mob1"><b>Mobile No:</label>
	<input name = "mob_no" type ="tel" pattern ="^\d{10}$" id="mob2" required/><br>
	<label id="add1"><b>Alternate Address:</label>
	<input name = "alt_add" type ="text" id="alt" required/><br>
	
	<label id="em1"><b>E-mail:</label>
	<input name = "email" type ="email" id="em2" required/><br>
	<label id="dob1"><b>Date Of Birth:</label>
	<input name = "dob" type ="date" id="dob2" required/><br>
	<label id="age1"><b>Date of joining.:</label>
	<input name = "doj" type ="date" id="age2" required/><br>
	<label id="doj1"><b>Department:</label>
	<input name = "department" type ="text"  id="doj2" required/><br>
	<label id="gen"><b>Gender:</label>
		<input id = "gen1" type="radio" name="gender" value="male"><p id = "gen11"> Male</p></input><br>
		<input id = "gen2" type="radio" name="gender" value="female"> <p id = "gen22">Female</p></input><br>
		<input id = "gen3" type="radio" name="gender" value="other"> <p id = "gen33">Other</p></input><br>
	<label id="vno1"><b>Vehicle No:</label>
	<input name = "vehicle_no" type ="text"  id="vno2" required/><br>
		<input name = "submit_btn" type ="submit" id ="submit_btn1" value="Submit"/>
	</form>
	
	<?php
	if(isset($_POST['submit_btn']))
		{
			//echo'<script type="text/javascript"> alert("Sign up button clicked") </script> ';
			$name= $_POST['name'];
			$department = $_POST['department'];
			$vehicle_no= $_POST['vehicle_no'];
			$doj = $_POST['doj'];
			$mob_no= $_POST['mob_no'];
			$alt_add= $_POST['alt_add'];
			$email= $_POST['email'];
			$dob = $_POST['dob'];
			$gender= $_POST['gender'];
			//$query = "SELECT id from admin WHERE username LIKE $_SESSION['username'] AND password LIKE $_SESSION['password'] "
			$username = $_SESSION['username'];
			$query = "insert into staff1 values('$username','$name','$mob_no','alt_add','$dob','$department','$email','$gender','$vehicle_no','$doj','360000','')";
			$query_run = mysqli_query($con,$query);
			if($query_run)
							{
								echo'<script type="text/javascript"> alert("Thank you for profile details.") </script>';
									header('location:staff1.php');
							}
							else
							{
								$query = "UPDATE staff1 set name = '$name',mob_no = '$mob_no',alt_add = '$alt_add',email = '$email',dob = '$dob',doj = '$doj',department = '$department',gender = '$gender',vehicle_no = '$vehicle_no' WHERE username LIKE '$username'";
								$query_run = mysqli_query($con,$query);
								if($query_run){
								echo'<script type="text/javascript"> alert("Your profile details are updated.") </script> ';
							
								}
								else{
									echo'<script type="text/javascript"> alert("Error.") </script> ';
								}
							}

		}
	?>
	
</div>
</body>
</html>

