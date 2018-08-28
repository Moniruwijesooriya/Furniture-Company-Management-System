
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
<a href="home.php"><button class="button">Home</button></a>

		<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			error_reporting(0);
			include("design.css");
			$Username= $_POST ["user_name"] ;
			$pwd=$_POST ["password"] ;
			$nwpwd=$_POST ["nwpwd"];
			$tpe = $_POST["tpe"];
			
			
			
			if ($_POST["Update"]){
				
			
			$spwd="SELECT password FROM user_login WHERE user_name='$Username'";
			$swd=mysql_query($spwd);
			$typr="SELECT user_type FROM user_login WHERE user_name='$Username'";
			$typ=mysql_query($typr);
			if($tpe==$typ && $swd==$pwd ){
				$sql2="UPDATE user_login
				SET password='$nwpwd'
			WHERE user_name ='$Username'";}
			if(mysql_query($sql2)){
				echo "Password Successfuly updated";
			}else{
				echo "Invalid Username or password";
			}
			}
			
			
				
			
			?>
		<head>
		<title> MKM User UPDATE  </title>
                 
	</head>
	
	<body>
	
	<div class="fm">
            <center>
		<form action="user_update.php" method="POST">
		
                    Username <br><input type ="text" name="user_name"><br>
					Current Password <br><input type ="password" name="password"><br>
					New Password <br><input type ="password" name="nwpwd"><br>
			
			
					<select name="tpe">
						<option value="Administrator">Administrator</option>
						<option value="Manager">Manager</option>
						
						
						</select><br>
                       
			<input type="submit" name= "Update" value="UPDATE">
                        
			
		</form>
                </div>
		
		<footer>..Group 33..</footer>
	</body>
</html>