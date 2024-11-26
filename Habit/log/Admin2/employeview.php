<html>
<body>
<?php
include('connection.php');
	$e1=$_POST['e_id'];
	$e2=$_POST['f_name'];
	$e3=$_POST['s_name'];
	$e4=$_POST['gender'];
	$e5=$_POST['h_name'];
	$e6=$_POST['p_name'];
	$e7=$_POST['c_name'];
	$e8=$_POST['DOJ'];
	$e9=$_POST['desig'];
    $e10=$_POST['tele'];
	$e11=$_POST['mail'];
    
    $sql="select *from employe";
    