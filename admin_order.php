
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM ode";
			$records=mysql_query($sql);
			error_reporting(0);
			include("design.css");
?>
<html>
	<head>
		<title>MKM Order</title>
	</head>
	<body>

	<div class="container">
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Orders</h1>
</header>	

	<div class="topnav">
	<a href="adminhome.php">Home</a>
	<a href="admin_furniture.php">Furniture</a>
	  <a href="admin_showroom.php">Showroom</a>
	  <a href="admin_customer.php">Customers</a>
	  <a href="admin_delivery.php">Delivery</a>
	  <a href="admin_order.php">Order</a>
	  <a href="user.php">Users</a>
	  <a href="admin_stock_check.php">Stock</a>
	  <a href="admin_manu_order.php">Manufacture Orders</a>
	  <a href="home.php">Log Out</a>
  
</div class="topnav">



</header>	
 
 <center>
<h2 style ="text-align:center">Order Details</h2>
	<table width=75% border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Order ID</th>
			<th>Showroom ID</th>
			<th>Furniture ID</th>
			<th>Customer ID</th>
			<th>Quantity</th>
			<th>Date and Time</th> 
			
		</tr>
		</center>
  
<?php
	while($order=mysql_fetch_assoc($records)){
		echo "<tr>";
			echo "<td >".$order["or_id"]."</td>";
			echo "<td >".$order["sh_id"]."</td>";
			echo "<td >".$order["fu_id"]."</td>";
			echo "<td >".$order["cu_id"]."</td>";
			echo "<td >".$order["quantity"]."</td>";
			echo "<td >".$order["date_time"]."</td>";
			
		echo "</tr>";
	}
	echo "<table>";
	mysql_close();
?>

<footer>..Group 33..</footer>
</body>
</html>