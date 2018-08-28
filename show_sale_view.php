
<?php
			mysql_connect("localhost","root",'');
			mysql_select_db('furnitures_mkm');
			$sql="SELECT * FROM furniture";
			$records=mysql_query($sql);
			error_reporting(0);
?>
<html>
<head>
<title>MKM Showroom Sale</title>
</head>
<body>

<header><h1 style="font-size:55px;text-align:center;">Showroom Sale</h1>


<h2 style ="text-align:center">Furniture Details</h2>
<table width=75% border=1 cellpadding=1 cellspacing=1>
  <tr>
    
    <th>Furniture Name</th> 
    <th>Unit Price</th>
</tr>
  
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

<a href="home.php"><button color=black;align="center">Home</button> </a>

</body>
</html>