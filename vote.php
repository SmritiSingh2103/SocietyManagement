
<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/last.css" type="text/css"/>
	<title>Elections</title>
</head>
<body>

<div class="navbar">
<?php include_once("admin.php");?>
</div>

<form id="myform" action="vote.php" method="post">
</form>
<div id = "rbutton">

</div>
<script>
(function show(){
	var count; var a = "a";
	var div = document.getElementById("rbutton"); 
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "getvote.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();
	response = JSON.parse(xhttp.responseText);
	for(i in response) {
		//a = a + count;
		var x = document.createElement("INPUT");
	x.setAttribute("type", "radio");
//	x.setAttribute("id",count);
	
	div.appendChild(x);
	//document.body.appendChild(x);
//	var name = response[i].name;
	//x.setAttribute("value",name);
	//x.setAttribute("name","voter");
	
//	var para = document.createElement("P");
 //   var t = document.createTextNode(name);
 //   para.appendChild(t);
//	para.setAttribute("id",a);
//	div.appendChild(para);
 //   var newElem = document.createElement("BR");
 //   div.insertBefore(newElem, a);
	
	
	
	//	count++;
	}

 

}());

</script>
</body>
</html>