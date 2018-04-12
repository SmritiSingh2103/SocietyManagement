<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style10.css" type="text/css"/>
	<title>My Profile</title>
</head>
<body>
<nav>
<ul id="menuContainer">
<?php include_once("menu_template.php");?>
</ul>
</nav>
<div id="bodyContainer3">
	
		<h2>Profile Details</h2>
		<form class="myform" action="index.php" method="post">
		<label id="pro1"><b>Flat No:</label>
		<input name = "flatno" type ="text" id="pro2"/><br>
		<label id="pronam1"><b>No. of Members:</label>
		<input name = "noofmem" type ="text" id="pronam2"/><br>
		<input name = "submit_btn2" type ="submit" id ="search_btn22" value="Add"/><br>
		</form>
		<?php
		if(isset($_POST['submit_btn2']))
		{
			//echo'<script type="text/javascript"> alert("Sign up button clicked") </script> ';
			$flatno= $_POST['flatno'];
			$noofmem= $_POST['noofmem'];
			$_SESSION['flatno'] = $flatno;
			$_SESSION['noofmem'] = $noofmem;
			$x = $noofmem;
			while($x != 0){
				header('location:index.php');
				$x--;
			}
			$query =  "INSERT INTO flat values('$flatno','$noofmem')";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run) > 0)
			{
					mysqli_close($con);
			}
			else
							{
								echo'<script type="text/javascript"> alert("No such product ID.") </script> ';
							}

		}
		
		
	?>

</div>
</body>
</html>