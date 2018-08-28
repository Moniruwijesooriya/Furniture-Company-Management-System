
<!DOCTYPE html>
<html>

<header>
	
	<h1 style="font-size:50px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:30px">Manufacture Order</h1>
</header>
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