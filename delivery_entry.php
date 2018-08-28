
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
	<h1 style="font-size:30px">Delivery Entry Form</h1>
</header>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			
			$Delivery_ID = $_POST ["or_id"] ;
			$Date_Time = $_POST ["date_time"] ;
			
			if (!$_POST["Submit"]){
				echo "<center>All fields are required</center>";
			}
			else{
				if ($Delivery_ID!=Null){
				$sql = "INSERT into delivery
				values('$Delivery_ID''$Date_Time')";}
				
				if (mysql_query($sql)){
						echo "Data entry successful. <br> Go to Delivery details page and Refresh";
				}
				else{
					echo "Sorry. Something went wrong, try later.";
				}
			}
		?>
		
	<head>
		<title> MKM Delivery Entry </title>
                 
	</head>
	<a href="managerhome.php"><button class="button">Home</button></a>
		<a href="manager_delivery.php"><button class="button">Delivery</button></a>
	<body>
            <div class="fm"><center>
		<form action="delivery_entry.php" method="POST">
		
                    Order ID<br> <input type = "text" name="or_id"><br>
                    Date <br><input type = "text" name="date_time"><br>
                        <input type="submit" name="Submit" value="Enter"><br>
		</form>
                </center>
				</div>
		
		<footer>..Group 33..</footer>
		
	</body>
</html>