
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
input[type=password], select {
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
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">User Entry</h1>
</header>
<a href="adminhome.php"><button class="button">Home</button></a>
<a href="user.php"><button class="button">User</button></a>

		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			
			$Username= $_POST ["user_name"] ;
			$Password = $_POST ["password"] ;
			$Name=$_POST ["name"];
			$Phone_number = $_POST ["phone_num"] ;
			$Address = $_POST ["address"] ;
			$Email = $_POST ["email"] ;
			$User_type = $_POST ["user_type"] ;
			if (!$_POST["Submit"]){
				echo "<center>All fields are required</center>";
			}
			else{
				if ($Username!=Null){
				$sql = "INSERT into user_login (user_name,password,name,user_type,email,phone_num,address)
				values('$Username','$Password','$Name','$User_type','$Email','$Phone_number','$Address')";}
				if (mysql_query($sql)){
						echo "Data entry successful.";
				}
				else{
					echo "Sorry. Something went wrong, try later.";
				}
			}
		?>
	<head>
		<title> MKM User Entry </title>
              
	</head>
	
	<body>
        <div class="fm">    
		<form action="user_entry.php" method="POST">
                    
                     <center>
                    Username <br><input type = "text" name="user_name" ><br>
                    Password  <br><input type = "password" name="password" ><br>
                    Name <br><input type = "text" name="name" ><br>
                       
                       User type <br><select name="user_type">
							<option value="Manager">Manager</option>
							<option value="Administrator">Administrator</option>
                               </select>			<br>
                        Email <br><input type = "text" name="email" ><br>
                        Phone Number <br><input type="text" name="phone_num" ><br>
                        
                        Address <br><input type="text" name="address" ><br>
                        
			
                        <input type="submit" name="Submit" value="Register"><br>
                        
                    </center>
		</form>
              </div>
		<footer>..Group 33..</footer>
		
	</body>
</html>