
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM user_login";
			$records=mysql_query($sql);
			error_reporting(0);
			include("design.css");
?>
<html>
<head>
<title>MKM Users</title>
</head>
<body>

<div class="container">
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Users</h1>
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
<a href="user_entry.php"><button class="button">Register</button></a>
<a href="user_update.php"><button class="button">Update</button></a>
<a href="user_delete.php"><button class="button">Delete</button></a>


</header>	<center>

<h2 style ="text-align:center">Users</h2>
<table width=75% border=1 cellpadding=1 cellspacing=1>
  <tr>
    <th>User ID</th>
    <th>User Name</th>
	<th>User Type</th>
	<th>Email</th>	
	<th>Phone Number</th>
	<th>Address</th>
</tr>
</center>
  
<?php
while($user=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td >".$user["user_ID"]."</td>";
	echo "<td>".$user["user_name"]."</td>";
	echo "<td>".$user["user_type"]."</td>";
	echo "<td>".$user["email"]."</td>";
	echo "<td>".$user["phone_num"]."</td>";
	echo "<td>".$user["address"]."</td>";
	echo "</tr>";
}
echo "<table>";
mysql_close();
?>
<footer>..Group 33..</footer>

</body>
</html>