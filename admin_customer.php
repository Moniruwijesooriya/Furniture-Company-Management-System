
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM customer";
			$records=mysql_query($sql);
			error_reporting(0);
			include("design.css");
?>
<html>
	<head>
	
		<title>MKM Customer</title>
	</head>
	<body>

	<div class="container">
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Customers</h1>
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
	<h2 style ="text-align:center">Customer Details</h2>
	 <style type="text/css">
                    table, td, tr {
                       /* border: solid 1px #D5D5FF;*/
                        border-collapse: collapse;
                        
                    }
                    td {font-size:16px;
					text-align:center;
                        background-color: #F4F4FF;
                    }
                    td ,tr {
                        padding: 5px;
                    }
                    tr:nth-child(even) td {
                        background-color: #fff;
					font-size:16px;
					text-align:center;
                    }
                    
                </style>
				<center>
	<table width=70% border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Customer ID</th>
			<th>Customer Name</th> 
			<th>Phone Number</th>
			<th>Address</th>
		
		</tr>
  </center>
<?php
	while($cus=mysql_fetch_assoc($records)){
		echo "<tr>";
			echo "<td >".$cus["cu_id"]."</td>";
			echo "<td >".$cus["cu_name"]."</td>";
			echo "<td>".$cus["phone_number"]."</td>";
			echo "<td>".$cus["address"]."</td>";
		echo "</tr>";
	}
	echo "<table>";
	mysql_close();
?>
<div class="topnav">
<footer>..Group 33..</footer>
</div>
</body>
</html>