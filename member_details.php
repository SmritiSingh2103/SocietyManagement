<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style15.css" type="text/css"/>
	<title>Member Details</title>
</head>
<body>
<nav>
<ul id="menuContainer">
<?php include_once("admin.php");?>
</ul>
</nav>
<div id="bodyContainer2">
	
		<h2>Member Details</h2>
		<form class = "myform" action="member_details.php" method="post">
		
		
		</form>
		<br><br><br><br>
		<?php
				
			
			$query = "SELECT * FROM member ";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run) > 0)
							{
								
								echo "<table align='left' id = 'abc1' class = 'x1' border-collapse: collapse'>
								<tr>
								<th>Username</th>
								<th>Member ID</th>
								<th>Name</th>
								<th>Address</th>
								<th>Mobile no</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Date Of Birth</th>
								<th>Flat Number</th>
								<th>Number of members</th>
								<th>Vehicle Number</th>
							</tr>";
								
								
								while($row = mysqli_fetch_array($query_run))
								{
								echo "<tr>";
								echo "<td>" . $row['username'] . "</td>";
								echo "<td>" . $row['mem_id'] . "</td>";
								echo "<td>" . $row['name'] . "</td>";
								echo "<td>" . $row['alt_add'] . "</td>";
								echo "<td>" . $row['mob_no'] . "</td>";
								echo "<td>" . $row['email'] . "</td>";
								echo "<td>" . $row['gender'] . "</td>";
								echo "<td>" . $row['dob'] . "</td>";
								echo "<td>" . $row['flat_no'] . "</td>";
								echo "<td>" . $row['no_of_mem'] . "</td>";
								echo "<td>" . $row['vehicle_no'] . "</td>";
								echo "</tr>";
								}
								echo "</table>";

								mysqli_close($con);
							}
							
							
							

		
	?>
			
	
</div>
</body>
</html>