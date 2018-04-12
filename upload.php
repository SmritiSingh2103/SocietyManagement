
<?php
	session_start();
	require 'dbconfig/config.php'
?>

<?php include_once("admin.php");
error_reporting(0);
$conn = mysqli_connect("localhost","root","","society");
if(count($_POST)>0) {
$username=$_POST[username];
$result = mysqli_query($conn,"SELECT * FROM admin where username='$username' ");
$result1 = mysqli_query($conn,"SELECT * FROM staff where username='$username' ");
}
?>

<!DOCTYPE html>

<html  lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/style16.css" type="text/css"/>
<title> Retrive data</title>
<style>
table, th, td {
border: 1px solid black;
}
</style>
</head>
<body>

<nav>
<ul id="menuContainer">
<?php include_once("admin.php");?>
</ul>
</nav>

<table>
<tr>
<td>Username</td>
<td>Password</td>
</tr>
<?php 
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["password"]; ?></td>
</tr>
<?php
$i++;
}
?>

<?php 
$i=0;
while($row = mysqli_fetch_array($result1)) {
?>
<tr>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["password"]; ?></td>
</tr>
<?php
$i++;
}
?>

</table>

</body>
</html>