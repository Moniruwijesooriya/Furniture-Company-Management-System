
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
	<h1 style="font-size:30px">Showroom Entry</h1>
</header>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			
			$Showroom_ID = $_POST ["sh_id"] ;
			$Showroom_Name = $_POST ["sh_name"] ;
			$Phone_number = $_POST ["tel_num"] ;
			$Address = $_POST ["address"] ;
			$District = $_POST ["district"] ;
			if (!$_POST["Submit"]){
				echo "<center>All fields are required</center>";
			}
			else{
				if ($Showroom_ID!=Null){
				$sql = "INSERT into showroom(sh_id,sh_name,tel_num,address,district)
				values('$Showroom_ID','$Showroom_Name','$Phone_number',
				'$Address','$District')";}
				if (mysql_query($sql)){
						echo "<center>Data entry successful.</center><br>";
				}
				else{
					echo "Sorry. Something went wrong, try later.";
				}
			}
		?>
	<head>
		<title> MKM Showroom Entry </title>
                 
	</head>
	<a href="adminhome.php"><button class="button">Home</button></a>	
<a href="admin_showroom.php"><button class="button">Showroom</button></a>
	<body>
          <div class="fm">  
		<form action="showroom_entry.php" method="POST">
		<center>
			Showroom ID <br> <input type = "text" name="sh_id" ><br>
			Showroom Name <br><input type = "text" name="sh_name" ><br>
			Phone number<br> <input type="text" name="tel_num" ><br>
			Address<br> <input type="text" name="address" ><br>
			District <br> <input type = "text" name="district" ><br>
			<input type="submit" name="Submit" value="Enter"><br>
			</center>
		</form>
                
     </div>  
<footer>..Group 33..</footer>	 
	</body>
</html>