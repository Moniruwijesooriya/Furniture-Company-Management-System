
<!DOCTYPE html>
<html>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			
			$Furniture_ID = $_POST ["fu_id"] ;
			$Furniture_Name = $_POST ["fu_name"] ;
			$Price = $_POST ["price"] ;
			
			if (!$_POST["Submit"]){
				echo "All fields are required";
			}
			else{
				if ($Furniture_ID!=Null){
				$sql = "INSERT into furniture(fu_id,fu_name,price)
				values('$Furniture_ID','$Furniture_Name','$Price')";}
				
				if (mysql_query($sql)){
						echo "Data entry successful";
				}
				else{
					echo "Sorry. Something went wrong, try later.";
				}
			}
		?>
		
	<head>
		<title> MKM Furniture Entry </title>
	</head>
	
	<body>
		<form action="furniture_entry.php" method="POST">
		
			
			Showroom_ID : <input type = "text" name="sale_sh_id">
			 : <input type = "text" name="sale_fu_id">
			<input type="submit" name="Submit" value="Enter">
		</form>
		
		<a href="admin_furniture.php"><button color=black;align="center">Furniture</button> </a>
		
	</body>
</html>