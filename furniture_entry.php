
<!DOCTYPE html>
<html>
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Furniture Entry</h1>
</header>
<a href="adminhome.php"><button class="button">Home</button></a>
<a href="admin_furniture.php"><button class="button">Furniture</button></a>

		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			
			$Furniture_ID = $_POST ["fu_id"] ;
			$Furniture_Name = $_POST ["fu_name"] ;
			$Price = $_POST ["price"] ;
			
			if (!$_POST["Submit"]){
				echo "<center>All fields are required</center>";
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
	</head>
	
	<body>
            <div class="fm">
		<form action="furniture_entry.php" method="POST">
		<center>
			Furniture_ID  <br> <input type = "text" name="fu_id"><br>
			Furniture_Name <br> <input type = "text" name="fu_name"><br>
			Price-Rs <br> <input type="number" name="price"><br>
                        <input type="submit" name="Submit" value="Enter">
		</center>
		</form>
                </div>
	
        
		<footer>..Group 33..</footer>
	</body>
</html>