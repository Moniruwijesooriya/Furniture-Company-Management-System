
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
	<h1 style="font-size:30px">Order Update</h1>
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
			
			$tpe = $_POST["tpe"];
			$Up = $_POST["up"];
			
			
			if($tpe=='showroom'){
				$sql1="UPDATE ode
				SET sh_id='$Up'
				WHERE or_id ='$Order_ID'";
			
			
				if(mysql_query($sql1)) {
			echo "Showroom ID successfully updated..";}
			else{
			echo "Error occured.";}}
			
			if($tpe=='fu'){
				$sql2="UPDATE ode
				SET fu_id='$Up'
				WHERE or_id ='$Order_ID'";
			
			
				if(mysql_query($sql2)) {
			echo "Furniture ID successfully updated..";}
			else{
			echo "Error occured.";}}
			
			if($tpe=='cu'){
				$sql2="UPDATE ode
				SET cu_id='$Up'
				WHERE or_id ='$Order_ID'";
			
			
				if(mysql_query($sql2)) {
			echo "Showroom successfully updated..";}
			else{
			echo "Error occured.";}}
			
			if($tpe=='qu'){
				$sql3="UPDATE ode
				SET quantity='$Up'
				WHERE or_id ='$Order_ID'";
			
			
				if(mysql_query($sql3)) {
			echo "Showroom successfully updated..";}
			else{
			echo "Error occured.";}}
			
			if($tpe=='date'){
				$sql4="UPDATE ode
				SET date_time='$Up'
				WHERE or_id ='$Order_ID'";
			
			
				if(mysql_query($sql4)) {
			echo "Showroom successfully updated..";}
			else{
			echo "Error occured.";}}
			
			
		?>
		
		
	<head>
		<title> MKM Showroom UPDATE Address </title>
                 
	</head>
	<a href="managerhome.php"><button class="button">Home</button></a>
		<a href="manager_order.php"><button class="button">Order</button></a>
	<body>
	
	<div class="fm">
            <center>
		<form action="ode_update.php" method="POST">
		
                    Order ID <br><input type ="text" name="or_id"><br>
					
					<select name="tpe">
						<option value="showroom">Showroom Name</option>
						<option value="fu">Furniture ID</option>
						<option value="cu">Customer ID</option>
						<option value="qu">Quantity</option>
						<option value="date">Date</option>
						</select>
                    <br><input type ="text" name="up" placeholder="Attribute"> <br>   
			<input type="submit" name= "Update" value="UPDATE">
                        
			
		</form>
                </div>
		
		<footer>..Group 33..</footer>
	</body>
</html>