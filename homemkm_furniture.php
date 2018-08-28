
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM furniture";
			$records=mysql_query($sql);
			error_reporting(0);
			include("design.css");
?>
<html>
<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Furniture</h1>
</header>
<head>
<title>MKM furniture</title>
</head>
<body>
<div class="topnav">
  <a href="home.php"> Home</a>
  <a href="homemkm_furniture.php">Furniture</a>
  <a href="homemkm_showroom.php">Showroom</a>
  <a href="userlogin.php"> User Login</a>
  
</div>



<center>
<h2 style ="text-align:center">Furniture Details</h2>
<table width=75% border=1 cellpadding=1 cellspacing=1>
  <tr>
    
    <th>Furniture Name</th> 
    <th>Unit Price</th>
</tr>
</center>
  
<?php
while($furniture=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$furniture["fu_name"]."</td>";
	echo "<td>".$furniture["price"]."</td>";
	echo "</tr>";
}
echo "<table>";
mysql_close();
?>
<footer>..Group 33..</footer>


</body>
</html>