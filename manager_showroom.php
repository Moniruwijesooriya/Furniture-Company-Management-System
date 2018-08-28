
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM showroom";
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
		<title>MKM Showroom</title>
	</head>
	<body>

<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Showroom</h1>
</header>


<div class="topnav">
	<a href="managerhome.php">Home</a>
	<a href="manager_furniture.php">Furniture</a>
	  <a href="manager_showroom.php">Showroom</a>
	  <a href="manager_customer.php">Customers</a>
	  <a href="manager_delivery.php">Delivery</a>
	  <a href="manager_order.php">Order</a>
	  
	  <a href="manager_stock_check.php">Stock</a>
	  <a href="manu_order_view.php">Manufacture Orders</a>
	  <a href="home.php">Log Out</a>
  
</div class="topnav">

	<center>
	<h2 style ="text-align:center">Showroom Details</h2>
	<table width=75% border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Showroom ID</th>
			<th>Showroom Name</th> 
			<th>Phone Number</th>
			<th>Address</th>
			<th>District</th>
		</tr>
  </center>
<?php
	while($showroom=mysql_fetch_assoc($records)){
		echo "<tr>";
			echo "<td >".$showroom["sh_id"]."</td>";
			echo "<td >".$showroom["sh_name"]."</td>";
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