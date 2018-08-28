
<!DOCTYPE html>
<html>
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Stock Entry</h1>
</header>

		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			include("design.css");
			include("designform.css");
			
			error_reporting(0);
			
			$Furniture_ID = $_POST ["stk_fu_id"] ;
			$Quantity = $_POST ["quantity"] ;
			

			if (!$_POST["Submit"]){
				echo "<center>All fields are required</center></center>";
			}
			else{
				if ($_POST["Submit"]){
				$sql2 = "INSERT INTO stock(stk_fu_id,quantity)
				values('$Furniture_ID','$Quantity')";}
				
				if (mysql_query($sql2)){
						echo "Data entry successful";
				}
				else{
					echo "Sorry. Something went wrong, try later.";
				}
			}
			
		?>
			<style>
input[type=text], select {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:#D7D6C9 ;
}
input[type=number], select {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:#D7D6C9 ;
}

input[type=submit] {
    width: 30%;
    background-color:#272723;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	;
.fm{
	background-color:#F8C471  ;
	color: #1B2631;
	font-size:20px;
	
}	
}

input[type=submit]:hover {
    background-color:#D3CEA3  ;
	
	
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	
}
header, footer {
    padding: 1em;
    color: #A95308;
    background-color: #F1C40F;
    clear: left;
    text-align: center;
font-family: family=Mogra;}

headern{
    padding: 1em;
    color: #171502 ;
    background-color:#F1C40F;
    clear: left;
    text-align: center;
font-family: family=Mogra;}

</style>
			
			
	<head>
		<title> MKM Stock </title>
                
	</head>
	
	<body>
            
</header>
	<a href="adminhome.php"><button class="button">Home</button></a>
	<a href="admin_stock_check.php"><button class="button">Stock</button></a>

			<div class="fm">
		<form action="stock_entry.php" method="POST">
		<center>
			
			Furniture ID <input type = "text" name="stk_fu_id">
			Quantity  <input type = "number" name="quantity">
		
		
		</div>
		<center><input type="submit" name="Submit" value="Enter"></center>
			</form>
		<center>
		<h1>Stock Table</h1>
		<table width=75% border=1 cellpadding=1 cellspacing=1>
			<tr>
				<th>Furniture ID</th>
				<th>Quantity</th> 
			</tr>
			</center>
  
		<?php
			$sql1="SELECT * FROM stock";
			$records=mysql_query($sql1);
			while($stock=mysql_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$stock["stk_fu_id"]."</td>";
					echo "<td>".$stock["quantity"]."</td>";
				echo "</tr>";
			}
		echo "<table>";
		mysql_close();
		?>
		
		<footer>..Group 33..</footer>
	</body>
</html>