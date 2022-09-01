<?php

$connect = mysql_connect("localhost","root","") or die ("Couldn't connect!");

mysql_select_db("RabIT") or die ("Couldn't find db");
echo "<div class=\"Name\">Names: <br></div> ";
$query1=mysql_query ("SELECT name FROM users");
while ($row1=mysql_fetch_assoc($query1))
 {
    $name=$row1['name'];



 echo "<div class=\"Name\">$name  <br></div> ";
 }
 ?>
 <!DOCTYPE HTML>
 <html>
 	<head>
 		<meta charset = "utf-8">
 		<title></title>
       <link rel ="stylesheet" href="css/users.css">
 	</head>

 	<body>

 	</body>
 	</html>
