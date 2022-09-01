<?php

$connect = mysql_connect("localhost","root","") or die ("Couldn't connect!");

mysql_select_db("RabIT") or die ("Couldn't find db");
 echo  "<div class=\"Name\">Name : Title <br></div> ";
$query1=mysql_query ("SELECT advertisements.title AS title, users.name AS name FROM users,advertisements WHERE users.id=advertisements.userid ORDER BY users.id");
while ($row1=mysql_fetch_assoc($query1))
 {
    $name=$row1['name'];
    $title=$row1['title'];

 echo"<div class=\"Name\">$name : $title <br></div> ";
 }
 ?>
 <!DOCTYPE HTML>
 <html>
 	<head>
 		<meta charset = "utf-8">
 		<title></title>
       <link rel ="stylesheet" href="css/advertisements.css">
 	</head>

 	<body>

 	</body>
 	</html>
