
<!DOCTYPE html>
<html>
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
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Order Entry</h1>
</header>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			
			$Order_ID = $_POST ["or_id"] ;
			$Showroom_ID = $_POST ["sh_id"] ;
			$Furniture_ID = $_POST ["fu_id"] ;
			$Customer_ID = $_POST ["cu_id"] ;
			$Quantity=$_POST["quantity"] ;
			$Date_Time=$_POST["date_time"] ;
			
			
			if (!$_POST["Submit"]){
				echo "<center>All fields are required</center>";
			}
			else{
				$checkstock= "SELECT quantity FROM stock WHERE stk_fu_id='$Furniture_ID'";
				$checkresult=mysql_query($checkstock);
				while($assData=mysql_fetch_assoc($checkresult)) {
				$val= $assData['quantity'];}
				$sql = "INSERT INTO ode VALUES('$Order_ID','$Showroom_ID','$Furniture_ID','$Customer_ID','$Quantity','$Date_Time')";
				if ($val<$Quantity){
				header('Location:manu_order.php');
				}
				
				
				}
				
				
				if (mysql_query($sql)){
						echo "Data entry successful";
				}
				
				
			
			
			
		?>
		
	<head>
		<title> MKM Ode Entry </title>
                
	</head>
	<a href="managerhome.php"><button class="button">Home</button></a>
		<a href="manager_order.php"><button class="button">Order</button></a>
		<a href="stock_sale_update.php"><button class="button">Stock Sale Update</button></a>
	<body>
            <div class="fm">
		<form action="ode_entry.php" method="POST">
		<center>
            Order ID <br><input type = "number" name="or_id"><br>
			Showroom ID <br> <input type = "text" name="sh_id"><br>
			Furniture ID <br> <input type="text" name="fu_id"><br>
		    Customer ID <br><input type="text" name="cu_id"><br>
			Quantity <br><input type="number" name="quantity"><br>
			Date <br><input type="text" name="date_time"><br>
			<input type="submit" name="Submit" value="Enter"><br>
		</form>
                </center>
		</div>
		<footer>..Group 33..</footer>
	</body>
</html>