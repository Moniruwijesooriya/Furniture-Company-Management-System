
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
	<h1 style="font-size:30px">User Update</h1>
</header>
<a href="adminhome.php"><button class="button">Home</button></a>
	<a href="user.php"><button class="button">User</button></a>
		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			$Username= $_POST ["user_name"] ;
			$Phone_number = $_POST ["phone_num"] ;
			$Address = $_POST ["address"] ;
			$Email = $_POST ["email"] ;
			$User_type = $_POST ["user_type"] ;
			
			$tpe = $_POST["tpe"];
			$Up = $_POST["up"];
			
			
			if($tpe=='phonenumber'){
				$sql1="UPDATE user_login
				SET phone_num='$Up'
				WHERE user_name ='$Username'";
			
			
				if(mysql_query($sql1)) {
			echo "Phone number successfully updated..";}
			else{
			echo "Error occured.";}}
			
			if($tpe=='email'){
				$sql2="UPDATE user_login
				SET email='$Up'
				WHERE user_name ='$Username'";
			
			
				if(mysql_query($sql2)) {
			echo "Email successfully updated..";}
			else{
			echo "Error occured.";}}
			
			if($tpe=='address'){
				$sql3="UPDATE user_login
				SET address='$Up'
				WHERE user_name ='$Username'";
			
			
				if(mysql_query($sql3)) {
			echo "Address successfully updated..";}
			else{
			echo "Error occured.";}}
			
			
			?>
		<head>
		<title> MKM User UPDATE  </title>
                 
	</head>
	
	<body>
	
	<div class="fm">
            <center>
		<form action="user_update.php" method="POST">
		
                    username <br><input type ="text" name="user_name"><br>
					
			
			
					<select name="tpe">
						<option value="phonenumber">Phone Number</option>
						<option value="address">Address</option>
						<option value="email">Email</option>
						
						
						</select>
                    <br><input type ="text" name="up" placeholder="updating detail"> <br>   
			<input type="submit" name= "Update" value="UPDATE">
                        
			
		</form>
                </div>
		
		<footer>..Group 33..</footer>
	</body>
</html>