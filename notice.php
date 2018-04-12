
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
	<title>Notices</title>
</head>
<body>

<div class="navbar">
<?php include_once("menu_template.php");?>
</div>

<div id="bodyContainer3">
	
		<h2>Notices</h2>
		<form class="myform" action="notice.php" method="post">
		<div id = "notice"></div>
		</form>
		<?php
		
			$date = date("Y-m-d");
			
			
		
			
			$query = "SELECT * FROM notice WHERE end_date > '$date'";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run) > 0)
			{
								
								echo "<table id = 'abc' class = 'x' align='center' border-collapse: collapse' >;
								<tr>	
								<th>Date</th>
								<th>End Date</th>
								<th>Notice</th>
								</tr>";

								while($row = mysqli_fetch_array($query_run))
								{
									$text = $row['notice_text'];
								echo "<tr>";
								echo "<td>" . $row['date'] . "</td>";
								echo "<td>" . $row['end_date'] . "</td>";
								echo "<td>";
								echo "<button id = \"notice\" onclick = \"show($text)\">View Notice</button>";
								echo "</td>";
								echo "</tr>";
								}
								echo "</table>";

								mysqli_close($con);
			}
			else
							{
								echo'<script type="text/javascript"> alert("No notices yet.") </script> ';
							}

		
		
		
		
	?>

</div>
<script>
function show(text){
	var x = document.createElement("TEXTAREA");
	x.setAttribute('name', 'post');
	x.setAttribute('maxlength', 5000);
	x.setAttribute('cols',80);
	x.setAttribute('rows', 40);
    var t = document.createTextNode(text);
    x.appendChild(t);
	x.readOnly = true;
    document.getElementById("notice").innerHTML=x;
	
}
</script>
</body>
</html>