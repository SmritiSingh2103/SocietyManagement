<?php include_once("admin.php");
error_reporting(0);
$conn = mysqli_connect("localhost","root","","society");
if(count($_POST)>0) {
$username=$_POST[username];
$result = mysqli_query($conn,"SELECT * FROM admin where username='$username' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
border: 1px solid black;
}
</style>
</head>
<body>
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
</table>
</body>
</html>