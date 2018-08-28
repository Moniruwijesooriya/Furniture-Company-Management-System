
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
	<h1 style="font-size:30px">Customer Update</h1>
</header>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			$Customer_ID = $_POST ["cu_id"] ;
			$tpe = $_POST["tpe"];
			$Up = $_POST["up"];
			
			
			if($tpe=='address'){
				$sql="UPDATE customer 
				SET address='$Up'
				WHERE cu_id ='$Customer_ID'";
			
			
				if(mysql_query($sql)) {
			echo "Address successfully updated..";}
			else{
			echo "Error occured.Try again with a valid customer ID";}}
			
			
			if ($tpe=='phone_number'){
				$sql2="UPDATE customer
				SET phone_number='$Up'
				WHERE cu_id ='$Customer_ID'";
			
				if(mysql_query($sql2)) {
			echo "Phone number successfully updated..";}
			else{
			echo "Error occured.Try again with a valid customer ID";}}
			
			
		?>
		
		
	<head>
		<title> MKM Customer UPDATE Address </title>
                 
	</head>
	<a href="managerhome.php"><button class="button">Home</button></a>
		<a href="manager_customer.php"><button class="button">Customer</button></a>
	<body>
	<div class="fm">
            <center>
		<form action="customer_update.php" method="POST">
		
                    Customer ID <br><input type ="text" name="cu_id"><br>
					
					<select name="tpe">
						<option value="phone_number">Phone Number</option>
						<option value="address">Address</option>
						</select>
                    <br><input type ="text" name="up" placeholder="Attribute"> <br>   
			<input type="submit" name= "Update" value="UPDATE">
                        
			
		</form>
                </div>
		
		<footer>..Group 33..</footer>
	</body>
</html>