<?php
$help = "myButtons";
$info = "myButtons";



$menuLinkid = basename($_SERVER['PHP_SELF'],".php");
if($menuLinkid == "help"){
	$help = 'myActiveButton';
}else if($menuLinkid == "info"){
	$info = 'myActiveButton';
}

?>


  
<a class="<?php echo $help;?>" href="help.php">Help</a>
<a class="<?php echo $info;?>" href="info1.php">Society Info</a>








