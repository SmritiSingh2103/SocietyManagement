<?php
$notice = "myButtons";
$complaint = "myButtons";
$event = "myButtons";
$email = "myButtons";
$rent = "dropbtn";
$pay = "myButtons";
$check = "myButtons";
$bill = "myButtons";
$detail = "dropbtn";
$member = "myButtons";
$staff = "myButtons";
$election = "myButtons";
$logout = "myButtons";

$menuLinkid = basename($_SERVER['PHP_SELF'],".php");
if($menuLinkid == "notice"){
	$notice = 'myActiveButton';
}else if($menuLinkid == "complaint"){
	$complaint = 'myActiveButton';
}else if($menuLinkid == "event"){
	$event = 'myActiveButton';
}else if($menuLinkid == "email"){
	$email = 'myActiveButton';
}else if($menuLinkid == "rent"){
	$rent = 'myActiveButton';
}else if($menuLinkid == "pay"){
	$pay = 'myActiveButton';
}else if($menuLinkid == "check"){
	$check = 'myActiveButton';
}else if($menuLinkid == "bill"){
	$bill = 'myActiveButton';
}else if($menuLinkid == "detail"){
	$detail = 'myActiveButton';
}else if($menuLinkid == "logout"){
	$logout = 'myActiveButton';
}else if($menuLinkid == "member"){
	$member = 'myActiveButton';
}else if($menuLinkid == "staff"){
	$staff = 'myActiveButton';
}else if($menuLinkid == "election"){
	$election = 'myActiveButton';
}

if($member == "myActiveButton" || $staff == "myActiveButton")
	$new1 = 'myActiveButton';
	
if($pay == "myActiveButton" || $check == "myActiveButton" || $bill == "myActiveButton" )
	$new2 = 'myActiveButton';

?>


  <a class="<?php echo $notice;?>" href="notice.php">Update Notice</a>
  <a class="<?php echo $complaint;?>" href="view_comp.php">View Complaint</a> 
  <a class="<?php echo $event;?>" href="view_events.php">View Events</a>
  <a class="<?php echo $email;?>" href="email1.php">SMS</a>
  
  <div class="dropdown">
    <button class="dropbtn">Rent
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
		<a href="pay.php">Pay</a>
		<a href="check.php">Check</a>
		<a href="bill.php">Send Bill</a>
	</div>
  </div> 

 <div class="dropdown">
    <button class="dropbtn">Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
		<a href="view_mem.php">Member</a>
		<a href="staff_details.php">Staff</a>
	</div>
  </div> 

  <a class="<?php echo $election;?>" href="election.php">Elections</a>
  <a class="<?php echo $logout;?>" href="admin_logout.php">Logout</a>
  
  <div id="upsearch">
<form class="form-inline" method="post" action="upload.php">
<input id="upload1" type="text" name="username" class="form-control" placeholder="Search username..">
<button id="upload" type="submit" name="save" class="btn btn-primary">Search</button>
</form>
</div>







