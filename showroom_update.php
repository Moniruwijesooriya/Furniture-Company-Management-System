
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
	<h1 style="font-size:30px">Showroom Update</h1>
</header>
	<a href="adminhome.php"><button class="button">Home</button></a>
	<a href="admin_showroom.php"><button class="button">Showroom</button></a>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			$Sh_ID = $_POST ["sh_id"] ;
			$Sh_name = $_POST ["sh_name"] ;
			$Tel = $_POST ["tel_num"] ;
			$Addr = $_POST ["address"] ;
			
			$tpe = $_POST["tpe"];
			$Up = $_POST["up"];
			
			
			if($tpe=='showroom'){
				$sql1="UPDATE showroom 
				SET sh_name='$Up'
				WHERE sh_id ='$Sh_ID'";
			
			
				if(mysql_query($sql1)) {
			echo "Address successfully updated..";}
			else{
			echo "Error occured.";}}
			
			if($tpe=='phonenumber'){
				$sql2="UPDATE showroom 
				SET tel_num='$Up'
				WHERE sh_id ='$Sh_ID'";
			
			
				if(mysql_query($sql2)) {
			echo "Telephone Number successfully updated..";}
			else{
			echo "Error occured.";}}
			
			if($tpe=='address'){
				$sql3="UPDATE showroom 
				SET address='$Up'
				WHERE sh_id ='$Sh_ID'";
			
			
				if(mysql_query($sql3)) {
			echo "Address successfully updated..";}
			else{
			echo "Error occured.";}}
			
			
			
			
			
		?>
		
		
	<head>
		<title> MKM Showroom UPDATE Address </title>
                 
	</head>
	
	<body>
	
	<div class="fm">
            <center>
		<form action="showroom_update.php" method="POST">
		
                    Showroom ID <br><input type ="text" name="sh_id"><br>
					
					<select name="tpe">
						<option value="showroom">Showroom Name</option>
						<option value="phonenumber">Phone Number</option>
						<option value="address">Address</option>
						
						</select>
                    <br><input type ="text" name="up" placeholder="updating detail"> <br>   
			<input type="submit" name= "Update" value="UPDATE">
                        
			
		</form>
                </div>
		
		<footer>..Group 33..</footer>
	</body>
</html>