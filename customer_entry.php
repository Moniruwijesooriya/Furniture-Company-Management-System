
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
	<h1 style="font-size:30px">Customer Entry Form</h1>
</header>		
		<a href="managerhome.php"><button class="button">Home</button></a>
		<a href="manager_customer.php"><button class="button">Customer</button></a>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			
			$Customer_ID = $_POST ["cu_id"] ;
			$Customer_Name = $_POST ["cu_name"] ;
			$Phone_number = $_POST ["phone_number"] ;
			$Address = $_POST ["address"] ;
			if (!$_POST["Submit"]){
				echo "<center>All fields are required</center>";
			}
			else{
				if ($Customer_ID!=Null){
				$sql = "INSERT into customer(cu_id,cu_name,phone_number,address)
				values('$Customer_ID','$Customer_Name','$Phone_number','$Address')";}
				if (mysql_query($sql)){
						echo "<center>Data entry successful. <br> </center>";
				}
				else{
					echo "<center>Sorry. Something went wrong, try later.</center>";
				}
			}
		?>
	
	
	<head>
		<title> MKM Customer Entry </title>
                  
	</head>
	
	<body><p>
</p>      
<div class="fm">
		<form action="customer_entry.php" method="POST">
					<center>
                    Customer ID    <br><input type = "text" name="cu_id"><br>
                    Customer Name  <br><input type = "text" name="cu_name"><br></br>
                    Phone number   <br><input type="text" name="phone_number"><br></br>
                    Address        <br><input type="text" name="address"><br></br>
                    <input type="submit" name="Submit" value="Enter">
                    </center>   
		</form>
 </div>          
<footer>..Group 33..</footer>		
	</body>
</html>