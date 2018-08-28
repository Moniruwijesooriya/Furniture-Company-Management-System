
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
	<h1 style="font-size:30px">Manufacture Order</h1>
</header>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sq="SELECT * FROM manufacture_order";
			$records=mysql_query($sq);
			error_reporting(0);
			
			$Order_ID = $_POST ["or_id"] ;
			$Datez = $_POST ["start_date"] ;
			
			if (!$_POST["Submit"]){
				echo "<center>All fields are required<center><br>";
			}
			else{
				if ($Order_ID!=Null){
				$sql = "INSERT into manufacture_order (or_id,start_date) VALUES 
				('$Order_ID','$Datez')";}
				
				
				if (mysql_query($sql)){
						echo "Data entry successful.";
				}
				
			}
		?>
		
	<head>
		<title> MKM Manufacture Orders </title>
                 <style type="text/css">
                    table, td, tr {
                       /* border: solid 1px #D5D5FF;*/
                        border-collapse: collapse;
                        
                    }
                    td {
                        background-color: #F4F4FF;
                    }
                    td ,tr {
                        padding: 5px;
                    }
                    tr:nth-child(even) td {
                        background-color: #fff;
                    }
                    
                </style>
	</head>
	
	<body>
            <center>
		<form action="manu_order.php" method="POST">
		
                    Order ID<br><input type = "text" name="or_id"><br></br>
                    Date<br><input type = "text" name="start_date"><br></br>
                        <input type="submit" name="Submit" value="Enter">
		</form>
                
		
		<h2 style ="text-align:center">Manufacture Order Details</h2>
		<table width=75% border=1 cellpadding=1 cellspacing=1>
			<tr>
			<th>Manufacture Order ID</th>
			<th>Order ID</th> 
			<th>Date</th>
		</tr>
		</center>
  
<?php
while($manu=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td >".$manu["manu_or_id"]."</td>";
	echo "<td>".$manu["or_id"]."</td>";
	echo "<td>".$manu["start_date"]."</td>";
	echo "</tr>";
}
echo "<table>";
mysql_close();
?>
		
		
	<footer>..Group 33..</footer>
	</body>
</html>