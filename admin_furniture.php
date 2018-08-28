
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM furniture";
			$records=mysql_query($sql);
			error_reporting(0);
			include("design.css");
?>
<html>
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
<head>
<title>MKM furniture</title>
</head>
<body>

<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	
	<h1 style="font-size:50px">Furniture</h1>
	
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
<a href="furniture_entry.php"><button class="button">Enter</button></a>
<a href="furniture_update.php"><button class="button">Update</button></a>
<a href="furniture_delete.php"><button class="button">Delete</button></a>



<h2 style ="text-align:center">Furniture Details</h2>
<center>
<table width=75% border=1 cellpadding=1 cellspacing=1>
  <tr>
    <th>Furniture ID</th>
    <th>Furniture Name</th> 
    <th>Unit Price</th>
	</center>
</tr>
  
<?php
while($furniture=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td >".$furniture["fu_id"]."</td>";
	echo "<td>".$furniture["fu_name"]."</td>";
	echo "<td>".$furniture["price"]."</td>";
	echo "</tr>";
}
echo "<table>";
mysql_close();
?>

<div class="topnav">
<footer>..Group 33..</footer>
</body>

</html>