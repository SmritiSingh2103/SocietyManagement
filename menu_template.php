<?php
$notice = "myButtons";
$complaint = "dropbtn";
$view = "myButtons";
$report = "myButtons";
$close = "myButtons";
$update_stock = "myButtons";
$inventory = "myButtons";
$staff = "myButtons";
$staff_details = "myButtons";
$index = "myButtons";
$logout = "myButtons";

$logout = "myButtons";
$menuLinkid = basename($_SERVER['PHP_SELF'],".php");
if($menuLinkid == "notice"){
	$notice = 'myActiveButton';
}else if($menuLinkid == "complaint"){
	$complaint = 'myActiveButton';
}else if($menuLinkid == "view"){
	$view = 'myActiveButton';
}else if($menuLinkid == "report"){
	$report = 'myActiveButton';
}else if($menuLinkid == "close"){
	$close = 'myActiveButton';
}else if($menuLinkid == "inventory"){
	$inventory = 'myActiveButton';
}else if($menuLinkid == "update_stock"){
	$update_stock = 'myActiveButton';
}else if($menuLinkid == "staff"){
	$staff = 'myActiveButton';
}else if($menuLinkid == "staff_details"){
	$staff_details = 'myActiveButton';
}else if($menuLinkid == "logout"){
	$logout = 'myActiveButton';
}else if($menuLinkid == "index"){
	$index = 'myActiveButton';
}
if($view == "myActiveButton" || $report == "myActiveButton" || $close == "myActiveButton"){
	$new = 'myActiveButton';
}
?>


  <a class="<?php echo $notice;?>" href="notice.php">Notices</a>
  <div class="dropdown">
    <button class="dropbtn">Complaint
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
		<a href="view.php">View</a>
		<a href="report.php">Report</a>
		<a href="close.php">Close</a>
    </div>
  </div> 
<a class="<?php echo $staff;?>" href="staff.php">Event Booking</a>

<a class="<?php echo $index;?>" href="index.php">Edit Profile</a>
<a class="<?php echo $logout;?>" href="logout.php">Logout</a>







