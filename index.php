<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style10.css" type="text/css"/>
	<title>MY Home Page</title>
</head>
<body>
<nav>
<ul id="navbar">
<?php include_once("menu_template.php");?>
</ul>
</nav>
<div id="bodyContainer">
	
	<center>
		<h4>Welcome
		<?php echo $_SESSION['username'] ?>
		</h4>
	</center>
	<h2>Profile Details</h2>
	
	<form class="myform" action="index.php" method="post">
	
	<label id="name1"><b>Name:</label>
	<input name = "name" type ="text" id="name2" required/><br>
	<label id="mob1"><b>Mobile No:</label>
	<input name = "mobile_no" type ="tel" pattern ="^\d{10}$" id="mob2" required/><br>
	<label id="add1"><b>Alternate Address:</label>
	<textarea id = "myTextArea"
                  rows = "2"
                  cols = "20" name = "alter_add" required/></textarea>
	
	<label id="em1"><b>E-mail:</label>
	<input name = "email" type ="email" id="em2" required/><br>
	<label id="dob1"><b>Date Of Birth:</label>
	<input name = "DOB" type ="date" id="dob2" required/><br>
	<label id="age1"><b>Flat No.:</label>
	<input name = "flatno" type ="text" id="age2" required/><br>
	<label id="doj1"><b>No Of Members:</label>
	<input name = "no_of_mem" type ="number"  id="doj2" required/><br>
	<label id="gen"><b>Gender:</label>
		<input id = "gen1" type="radio" name="gender" value="male"><p id = "gen11"> Male</p></input><br>
		<input id = "gen2" type="radio" name="gender" value="female"> <p id = "gen22">Female</p></input><br>
		<input id = "gen3" type="radio" name="gender" value="other"> <p id = "gen33">Other</p></input><br>
	<label id="vno1"><b>Vehicle No:</label>
	<input name = "vehicle_no" type ="text"  id="vno2" required/><br>
		<input name = "submit_btn" type ="submit" id ="submit_btn1" value="Submit"/>
		<input name = "clear_btn" type ="reset" id ="clear_btn1" value="Clear"/>
	</form>
	
	<?php
	if(isset($_POST['submit_btn']))
		{
			//echo'<script type="text/javascript"> alert("Sign up button clicked") </script> ';
			$name= $_POST['name'];
			$flatno = $_POST['flatno'];
			$vehicle_no= $_POST['vehicle_no'];
			$no_of_mem = $_POST['no_of_mem'];
			$mobile_no= $_POST['mobile_no'];
			$alter_add= $_POST['alter_add'];
			$email= $_POST['email'];
			$DOB = $_POST['DOB'];
			$gender= $_POST['gender'];
			//$query = "SELECT id from admin WHERE username LIKE $_SESSION['username'] AND password LIKE $_SESSION['password'] "
			$username = $_SESSION['username'];
			$query = "insert into mprofile values('$username','$name','$flatno','$no_of_mem','$gender','$email','$DOB','$vehicle_no','$mobile_no','$alter_add')";
			$query_run = mysqli_query($con,$query);
			if($query_run)
							{
								echo'<script type="text/javascript"> alert("Thank you for profile details.") </script>';
								header('location:notice.php');
							}
							else
							{
								
								$query = "UPDATE mprofile set name = '$name',mobile_no = '$mobile_no',alter_add = '$alter_add',email = '$email',DOB = '$DOB',flatno = '$flatno',no_of_mem = '$no_of_mem',gender = '$gender',vehicle_no = '$vehicle_no' WHERE username LIKE '$username'";
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