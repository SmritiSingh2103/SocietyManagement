<?php
	session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style10.css" type="text/css"/>
	<title></title>
</head>
<body>
<nav>
<ul id="menuContainer">
<?php include_once("menu_template.php");?>
</ul>
</nav>
<div id="bodyContainer4">
	
		<form action = "logout.php" method = "post">
			<h1 id = "sure">Are you sure you want to log out ?</h1><br>
			<input name = "Yes" type ="submit" id = "yes_btn" value = "YES"/>
			<input name = "No" type ="submit" id = "no_btn" value = "No"/></br>
		</form>
		<?php
		if(isset($_POST['Yes']))
		{
			session_destroy();
			header('location:start.php');
		}
		if(isset($_POST['No']))
		{
			
			header('location:index.php');
		}
		?>
	
</div>
</body>
</html>