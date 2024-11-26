<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$servername="localhost";
$username="root";
$password="";
$dbname="habit";
    $a;
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if (!$conn)
{
die("CONNECTION FAILED !  ");
}
?>
</body>
</html>