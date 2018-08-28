
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
	<h1 style="font-size:30px">Delivery Update</h1>
</header>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			$Deli = $_POST ["delivery_id"] ;
			$Dt=$_POST["date_time"];
			
			
			if($_POST["Update"]){
				$sql="UPDATE delivery 
				SET date_time='$Dt'
				WHERE delivery_id ='$Deli'";
			
			
				if(mysql_query($sql)) {
			echo "Date successfully updated..";}
			else{
			echo "Error occured.";}}
			
			
			
			
		?>
		
		
	<head>
		<title> MKM Delivery UPDATE Address </title>
                 
	</head>
	<a href="managerhome.php"><button class="button">Home</button></a>
		<a href="manager_delivery.php"><button class="button">Delivery</button></a>
	<body>
	<div class="fm">
            <center>
		<form action="customer_update.php" method="POST">
		
                    Delivery ID <br><input type ="number" name="delivery_id"><br>
					
					
                    <br><input type ="text" name="date_time" placeholder="Date "> <br>   
			<input type="submit" name= "Update" value="UPDATE">
                        
			
		</form>
                </div>
		
		<footer>..Group 33..</footer>
	</body>
</html>