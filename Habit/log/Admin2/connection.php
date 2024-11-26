<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="tms";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if (!$conn)
{
die("CONNECTION FAILED !  ");
}
		echo "connected successfully";

?>
</body>
</html>