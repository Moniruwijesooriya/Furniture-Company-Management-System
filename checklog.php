<?php 
	mysql_connect("localhost","root","") or die ("Error Occures");
	mysql_select_db("furnitures_mkm") or die ("Error Occures");
	
	error_reporting(0);
	$user_name = $_POST["user_name"];
	$Password = $_POST["password"];
	$User_type=$_POST["user_type"];
	
	$aID="";
	$pss="";
	$type="";
	
	
	$tmp = "SELECT * FROM user_login WHERE user_name='$user_name' ";
	$getData = mysql_query($tmp);
	while($assData=mysql_fetch_assoc($getData)) {
		$aID = $assData["user_name"];
		$pss = $assData["password"];
		$type= $assData["user_type"];
		
	}
	
	if($user_name==$aID && $Password==$pss && $type=='Manager' && $User_type=='Manager' ) {
	include("managerhome.php");
	}

		else if($user_name==$aID && $Password==$pss && $type=='Administrator' && $User_type=='Administrator') {
	include("adminhome.php");
	}
	
	else{ 
	echo "Invalid Login";
	include("userlogin.php");	
		
		}
?>