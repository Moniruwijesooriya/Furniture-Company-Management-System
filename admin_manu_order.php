
<!DOCTYPE html>
<html>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sq="SELECT * FROM manufacture_order";
			$records=mysql_query($sq);
			error_reporting(0);
			include("design.css");
			$Order_ID = $_POST ["or_id"] ;
			$Datez = $_POST ["start_date"] ;
			
			
		?>
		
	<head>
		<title> MKM Manufacture Orders </title>
                 
	</head>
	
	
	<body>
		<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Manufacture Orders</h1>
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
		<h2 style ="text-align:center">Manufacture Order Details</h2>
		<table width=75% border=1 cellpadding=1 cellspacing=1>
			<tr>
			<th>Manufacture Order ID</th>
			<th>Order ID</th> 
			<th>Date</th>
		</tr>
  </center>
<?php
while($manu=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td >".$manu["manu_or_id"]."</td>";
	echo "<td>".$manu["or_id"]."</td>";
	echo "<td>".$manu["start_date"]."</td>";
	echo "</tr>";
}
echo "<table>";
mysql_close();
?>
		
		
		<footer>..Group 33..</footer>
	</body>
</html>