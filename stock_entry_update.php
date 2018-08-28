
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
	
	<h1 style="font-size:50px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:30px">Stock Entry Form</h1>
</header>
	<a href="adminhome.php"><button class="button">Home</button></a>
	<a href="admin_stock_check.php"><button class="button">Order</button></a>
		<?php
			$conn=mysqli_connect("localhost","root","","furnitures_mkm");
			/*mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');*/
			$sql1="SELECT * FROM stock";
			$records=mysqli_query($conn,$sql1) or  die(mysqli_error($conn));
			error_reporting(0);
			include("design.css");
			
			
			
			$Furniture_ID = $_POST ["stk_fu_id"] ;
			$NwQuantity = $_POST ["nwquantity"] ;
			if (!$_POST["Submit"]){
				echo "<center>All fields are required</center><br>";
			}
			else{
				
				
				$prestock="SELECT quantity FROM stock WHERE stk_fu_id='$Furniture_ID'";
				$getData = mysqli_query($conn,$prestock)  or  die(mysqli_error($conn));
				
				
				
				while($assData=mysqli_fetch_assoc($getData)) {
					
					$add= $assData['quantity']+ $_POST["nwquantity"];
				}
				
				$stockupdate = "UPDATE stock
				SET quantity =$add
				WHERE stk_fu_id='$Furniture_ID'";
				
				
				if (mysqli_query($conn,$stockupdate)){
						echo "Stock successfully updated.";
				}
				else{
					echo "Sorry. Something went wrong, try later.";
				}
			}
			
		?>
		
	<head>
		<title> MKM Stock </title>
                 
	</head>
	
	<body>
        <div class="fm"><center>
		<form action="stock_entry_update.php" method="POST">
			
			Furniture ID <br> <input type = "text" placeholder="Furniture ID" name="stk_fu_id"><br>
			Updating Quantity <br><input type = "number" name="nwquantity"><br>
			
			
			
			<input type="submit" name="Submit" value="update">
		</form>
            </center>
			</div>
		
			
		<center>
		
		<h1>Stock Table</h1>
		<table width=75% border=1 cellpadding=1 cellspacing=1>
			<tr>
				<th>Furniture ID</th>
				<th>Quantity</th> 
			</tr>
			</center>
  
		<?php
			while($stock=mysqli_fetch_assoc($records)){
				echo "<tr>";
					echo "<td >".$stock["stk_fu_id"]."</td>";
					echo "<td>".$stock["quantity"]."</td>";
				echo "</tr>";
			}
		echo "<table>";
		mysqli_close($conn);
		?>
		
		
	</body>
</html>