<?php
	session_start();
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style10.css" type="text/css"/>
	<title>Product Management</title>
</head>
<body>
<nav>
<ul id="menuContainer">
<?php include_once("menu_template.php");?>
</ul>
</nav>
<div id="bodyContainer1">
	
		<h2>Add Product</h2>
		<form class="myform" action="product.php" method="post">
			<label id="pnam1"><b>Name:</label>
			<input name= "name" type ="text" id="pnam2" required/><br>
			<label id="pbran1"><b>Brand:</label>
			<input name= "brand" type ="text" id="pbran2" required/><br>
			<label id="pcat1"><b>Product Category:</label>
			<input name = "category" type ="text" id="pcat2" required/><br>
			<label id="pamt1"><b>Amount:</label>
			<input name = "amount" type ="text" id="pamt2" required/><br>
			<label id="pdis1"><b>Discount:</label>
			<input name = "discount" type ="text" id="pdis2" placeholder = "%" required/><br>
			<label id="pquan1"><b>Quantity:</label>
			<input name = "quantity" type ="text" id="pquan2" required/><br>
			<label id="pdate1"><b>Date:</label>
			<input name = "date" type ="date" id="pdate2" required/><br>
			<input name = "submit_btn" type ="submit" id ="submit_btn3" value="Submit"/>
			<input name = "clear_btn" type ="reset" id ="clear_btn3" value="Clear"/>
		</form>
		<?php
		if(isset($_POST['submit_btn']))
		{
			//echo'<script type="text/javascript"> alert("Sign up button clicked") </script> ';
			$name= $_POST['name'];
			$brand = $_POST['brand'];
			$category= $_POST['category'];
			$amount= $_POST['amount'];
			$discount= $_POST['discount'];
			$quantity = $_POST['quantity'];
			$date = $_POST['date'];
			$query = "select * from product WHERE name LIKE '$name' AND brand LIKE '$brand'";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run) > 0){
				echo'<script type="text/javascript"> alert("Same product already exist.") </script>';
			}
			else {
			$query = "select max(product_id) curr_productid from product";
			$query_run = mysqli_query($con,$query);
			
			
				while($row=mysqli_fetch_assoc($query_run))
				{
					$max = $row['curr_productid'];
				}
				$max = $max + 1;
				$query = "insert into product values('$max','$name','$brand','$category','$amount','$discount','$quantity','$date')";
				$query_run = mysqli_query($con,$query);
				if($query_run)
								{
									
									echo'<script type="text/javascript"> alert("New product is successfully added.") </script>';
								}
				else
								{
									echo'<script type="text/javascript"> alert("Error") </script> ';
								}

			
			
			}
		}
	?>
	
</div>
</body>
</html>