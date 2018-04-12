<?php
	session_start();
	require 'dbconfig/config.php';
	//$c_id = "";
	//$complaint = "";
	if(isset($_POST['enter_btn']))
			{
			
			$c_id = $_POST['c_id'];
							echo'<script type="text/javascript"> alert($c_id) </script> ';
			$query = "SELECT complaint FROM complaint WHERE c_id LIKE '$c_id'";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run) == 1){
				$row = $query_run->fetch_assoc();
				$complaint = $row['complaint'];
				echo'<script type="text/javascript"> alert($complaint) </script> ';
			}
			else{
				echo'<script type="text/javascript"> alert("Error") </script> ';
			}
			
	}
	if(isset($_POST['close_btn']))
			{
			
			$c_id = $_POST['c_id'];
			$query = "UPDATE complaint SET status = 'closed' WHERE c_id LIKE '$c_id'";
			$query_run = mysqli_query($con,$query);
			if($query_run)
							{
								echo'<script type="text/javascript"> alert("Complaint Closed.") </script>';
								
							}
							else
							{
								echo'<script type="text/javascript"> alert("Error") </script> ';
							}
			}		
			
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style10.css" type="text/css"/>
	<title>Close Complaint</title>
</head>
<body>

<div class="navbar">
<?php include_once("menu_template.php");?>
</div>

<div id="bodyContainer5">
	
		<h2>Close Complaint</h2>
		<form class="myform" action="close.php" method="post">
			<label id="pro3"><b>Enter Complaint Id:</label>
			<input name = "c_id" type ="number" id="pro4" required/>
			<input name = "enter_btn" type ="submit" id ="" value="Enter"/>
			<label id="quan1"><b>Complaint:</label>
			<textarea id = "quan2"
                  rows = "3"
                  cols = "20" name = "complaint" value="<?php echo $complaint;?>" disabled/></textarea>

			<input name = "close_btn" type ="submit" id ="update_btn1" value="Close"/>
				
		</form>
		
</div>
</body>
</html>