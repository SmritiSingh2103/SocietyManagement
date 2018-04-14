<?php
	session_start();
	require 'dbconfig/config.php';


$query = "SELECT * FROM e_applied ";


$query_run = mysqli_query($con,$query);


$all_rows = array();
while($row = mysqli_fetch_array($query_run, MYSQLI_ASSOC)) {
	$all_rows[] = $row;
}

header("Content-type:application/json");
echo json_encode($all_rows);
mysqli_close($con);
?>
