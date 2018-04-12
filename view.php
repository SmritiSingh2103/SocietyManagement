
<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style10.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>View Complaint</title>
</head>
<body>

<div class="navbar">
<?php include_once("menu_template.php");?>
</div>

<div>
	
		<h2>Complaint</h2>
		<form class="viewmyform" action="view.php" method="post">

		</form>
		<?php
		
			$username = $_SESSION['username'];
			$query = "SELECT c_id,date,complaint,status FROM complaint WHERE username = '$username'";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run) > 0)
			{
								
								echo "<table id = 'abc1' class = 'x1' align='center' border-collapse: collapse' >
								<tr>
								<th>Complaint_ID</th>
								<th>Date</th>
								<th>Complaint</th>
								<th>Status</th>
								</tr>";

								while($row = mysqli_fetch_array($query_run))
								{
								echo "<tr>";
								echo "<td>" . $row['c_id'] . "</td>";
								echo "<td>" . $row['date'] . "</td>";
								echo "<td>" . $row['complaint'] . "</td>";
								echo "<td>" . $row['status'] . "</td>";
								echo "</tr>";
								}
								echo "</table>";

								mysqli_close($con);
			}
			else
							{
								echo'<script type="text/javascript"> alert("No complaints yet.") </script> ';
							}

		
		
		
		
	?>

</div>

</body>
</html>