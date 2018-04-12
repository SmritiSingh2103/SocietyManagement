<?php
	session_start();
	require 'dbconfig/config.php'
?>
<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style10.css" type="text/css"/>
	<title>Report Complaint</title>
</head>
<body>

<div class="navbar">
<?php include_once("menu_template.php");?>
</div>

<div id="bodyContainer5">
	
		<h2>Report Complaint</h2>
		<form class="myform" action="report.php" method="post">
			<label id="pro3"><b>Date:</label>
			<input name = "date" type ="date" id="pro4" required/><br>
			<label id="quan1"><b>Complaint:</label>
			<textarea id = "quan2"
                  rows = "3"
                  cols = "20" name = "complaint" required/></textarea>
			<label id="rmob1"><b>Mobile No:</label>
			<input name = "phone_no" type ="tel" pattern ="^\d{10}$" id="rmob2" required/><br>
			<input name = "report_btn" type ="submit" id ="update_btn1" value="Report"/>
				
		</form>
		<?php		
		if(isset($_POST['report_btn']))
		{
			//echo'<script type="text/javascript"> alert("Sign up button clicked") </script> ';
			$date= $_POST['date'];
			$complaint = $_POST['complaint'];
			$phone_no = $_POST['phone_no'];
//$status = "open";
			$username = $_SESSION['username'];
			$query = "SELECT flatno from flat WHERE username LIKE '$username'";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run) == 1){
				$row = $query_run->fetch_assoc();
				$flatno = $row['flatno'];
			}
			
			$query = "insert into complaint values('','$date','$username','$flatno','$phone_no','$complaint','open')";
			$query_run = mysqli_query($con,$query);
			if($query_run)
							{
								echo'<script type="text/javascript"> alert("Your Complaint noted down.") </script>';
								
							}
							else
							{
								
								echo'<script type="text/javascript"> alert("Error.") </script> ';
							}

		}		
				
		
		?>
			
		
		
	
</div>
</body>
</html>