
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM showroom";
			$records=mysql_query($sql);
			error_reporting(0);
			include("design.css");
?>
<html>
	<head>
		<title>MKM Showroom</title>
	</head>
	<body>
	

	<header>
	<h1 style="font-size:75px">MKM &nbsp; Furniture</h1>
	<h1 style="font-size:50px">Showroom</h1>
</header>
<div class="topnav">
  <a href="home.php"> Home</a>
  <a href="homemkm_furniture.php">Furniture</a>
  <a href="homemkm_showroom.php">Showroom</a>
  <a href="userlogin.php"> User Login</a>
  
</div>

 <center>
	<h2 style ="text-align:center">Showroom Details</h2>
	<table width=75% border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Showroom Name</th> 
			<th>Phone Number</th>
			<th>Address</th>
			<th>District</th>
		</tr>
		 </center>
  
<?php
	while($showroom=mysql_fetch_assoc($records)){
		echo "<tr>";
			echo "<td >".$showroom["sh_name"]."</td>";
			echo "<td>".$showroom["tel_num"]."</td>";
			echo "<td>".$showroom["address"]."</td>";
			echo "<td>".$showroom["district"]."</td>";
		echo "</tr>";
	}
	echo "<table>";
	mysql_close();
?>

<footer>..Group 33..</footer>
</body>
</html>