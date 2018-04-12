<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style16.css" type="text/css"/>
	<title>Rent Details</title>
</head>
<body>
<nav>
<ul id="menuContainer">
<?php include_once("admin.php");?>
</ul>
</nav>
<div>
	
		<h2 id="rent">Rent Details</h2>
		<form class = "myform" action="check.php" method="post">
		
		
		</form>
		<br><br><br><br>
		<?php
				
			
			$query = "SELECT * FROM rent ";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run) > 0)
							{
								
								echo "<table align='left' id = 'abc1' class = 'x1' border-collapse: collapse'>
								<tr>
								<th>Username</th>
								<th>Rent Paid</th>
								</tr>";
								
								
								while($row = mysqli_fetch_array($query_run))
								{
								echo "<tr>";
								echo "<td>" . $row['username'] . "</td>";
								echo "<td>" . $row['payment'] . "</td>";
								echo "</tr>";
								}
								echo "</table>";

								mysqli_close($con);
							}
							
							
							

		
	?>
			
	
</div>
</body>
</html>