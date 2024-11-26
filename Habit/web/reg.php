<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('../connection.php');
	$u=$_POST['uname'];
	$p=$_POST['pass'];
    $ph=$_POST['phno'];
    $e=$_POST['email'];
    $g=$_POST['gender'];
        $fname=$_FILES["image"]["name"];
        $path="avatar/".$fname;
        $ftemp=$_FILES["image"]["tmp_name"];
        move_uploaded_file($ftemp,$path);
        $sql="insert into reg(Uname,Pass,Email,Phone,Gender,Image) values ('$u','$p','$e','$ph','$g','$path')";
        
    /*
    else
    {
     $sql="insert into reg(Uname,Pass,Email,Phone,Gender,Image) values ('$u','$p','$e','$ph','$g','avatar/default.jpg')";   
    }*/
    $sql1="insert into login(username,password,type,status) values ('$u','$p','user','0')";
	
?>
</body>
</html>