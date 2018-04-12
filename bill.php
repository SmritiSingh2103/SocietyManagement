<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style15.css" type="text/css"/>
	<title>Send Bill </title>
</head>
<body>
<nav>
<ul id="menuContainer">
<?php include_once("admin.php");?>
</ul>
</nav>

<form action="bill.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="upload">Upload</button>
</form>

<?php

if(isset($_POST['upload']))
{ 
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="upload/";
// new file size in KB
$new_size = $file_size/1024; 
// new file size in KB
// make file name in lower case
$new_file_name = strtolower($file);
// make file name in lower case
$final_file=str_replace(' ','-',$new_file_name);
if(move_uploaded_file($file, $file_loc))
{
$sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";
mysqli_query($conn,$sql);
echo "File sucessfully upload";
}

}
?>
			
	
</div>
</body>
</html>