
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM showroom";
			$records=mysql_query($sql);
			error_reporting(0);
			include("design.css");
?>
<html>
	<head>
		<title>MKM Showroom</title>
	</head>
	<body>

	<div class="container">
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Showroom</h1>
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
<a href="showroom_entry.php"><button class="button">Enter</button></a>
<a href="showroom_update.php"><button class="button">Update</button></a>
<a href="showroom_delete.php"><button class="button">Delete</button></a>


</header>	
 




	<h2 style ="text-align:center">Showroom Details</h2>
	<table width=75% border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Showroom ID</th>
			<th>Showroom Name</th> 
			<th>Manager ID</th>
			<th>Phone Number</th>
			<th>Address</th>
			<th>District</th>
		</tr>
  
<?php
	while($showroom=mysql_fetch_assoc($records)){
		echo "<tr>";
			echo "<td >".$showroom["sh_id"]."</td>";
			echo "<td >".$showroom["sh_name"]."</td>";
			echo "<td >".$showroom["manager_ID"]."</td>";
			echo "<td>".$showroom["tel_num"]."</td>";
			echo "<td>".$showroom["address"]."</td>";
			echo "<td>".$showroom["district"]."</td>";
		echo "</tr>";
	}
	echo "<table>";
	mysql_close();
?>
<footer>..Group 33..</footer>
</body>
</html>