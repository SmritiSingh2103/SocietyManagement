
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
<?php include_once("admin.php");?>
</div>

<div id="bodyContainer3">
	
		<h2>Update Notices</h2>
		<form class="myform" action="notice.php" method="post">
		<div id = "notice"></div>
		</form>
		

</body>
</html>