
<!DOCTYPE html>
<html>
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Stock </h1>
</header>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql1="SELECT * FROM stock";
			$records=mysql_query($sql1);
			error_reporting(0);
			include("design.css");
			
		?>
		
	<head>
		<title> MKM Stock </title>
	</head>
	
	<body>
	

<center><a href="stock_sale_update.php"><button class="button">Stock Update</button></a></center>


</header>
		
		<center>
			<h1>Stock Table</h1>
		<table width=75% border=1 cellpadding=1 cellspacing=1>
			<tr>
				<th>Furniture ID</th>
				<th>Quantity</th> 
			</tr>
			</center>
  
		<?php
			while($stock=mysql_fetch_assoc($records)){
				echo "<tr>";
					echo "<td >".$stock["stk_fu_id"]."</td>";
					echo "<td>".$stock["quantity"]."</td>";
				echo "</tr>";
			}
		echo "<table>";
		mysql_close();
		?>
		
	<footer>..Group 33..</footer>	
	</body>
</html>