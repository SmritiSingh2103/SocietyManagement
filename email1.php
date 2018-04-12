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

 <form method="post" action='email1.php'>
   <table border=0>
   <tr>
     <td>Recipient</td>
     <td><input type='text' name='recipient'></td>
   </tr>
   <tr>
     <td>Message</td>
     <td><textarea rows=4 cols=40 name='message'></textarea></td>
   </tr>
   <tr>
     <td> </td>
     <td><input type=submit name=submit value=Send></td>
   </tr>
   </table>
   </form>	
   
   
   
   <?php
   if(isset($_POST['submit'])){

$phone = $_POST['recipient'];
$msg = $_POST['message'];


$ozeki_user = "admin";
$ozeki_password = "abc123";
$ozeki_url = "http://127.0.0.1:9501/api?";

function httpRequest($url){
    $pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
    preg_match($pattern,$url,$args);
    $in = "";
    if (!$fp) {
       return("$errstr ($errno)");
    } else {
        $out = "GET /$args[3] HTTP/1.1\r\n";
        $out .= "Host: $args[1]:$args[2]\r\n";
        $out .= "User-agent: Ozeki PHP client\r\n";
        $out .= "Accept: */*\r\n";
        $out .= "Connection: Close\r\n\r\n";

        fwrite($fp, $out);
        while (!feof($fp)) {
           $in.=fgets($fp, 128);
        }
    }
    fclose($fp);
    return($in);
}



function ozekiSend($phone, $msg, $debug=false){
      global $ozeki_user,$ozeki_password,$ozeki_url;

      $url = 'username='.$ozeki_user;
      $url.= '&password='.$ozeki_password;
      $url.= '&action=sendmessage';
      $url.= '&messagetype=SMS:TEXT';
      $url.= '&recipient='.urlencode($phone);
      $url.= '&messagedata='.urlencode($msg);

      $urltouse =  $ozeki_url.$url;
      if ($debug) { echo "Request: <br>$urltouse<br><br>"; }

      //Open the URL to send the message
      $response = httpRequest($urltouse);
      if ($debug) {
           echo "Response: <br><pre>".
           str_replace(array("<",">"),array("&lt;","&gt;"),$response).
           "</pre><br>"; }

      return($response);
}

$debug = true;

ozekiSend($phone,$msg,$debug);
}

?>

	
	
	


</body>
</html>