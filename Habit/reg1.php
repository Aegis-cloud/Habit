<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
    $sql="";
	$u=$_POST['uname'];
	$p=$_POST['pass'];
    $ph=$_POST['phno'];
    $e=$_POST['email'];

        $sql="insert into reg(Uname,Pass,Email,Phone,Gender,Image) values ('$u','$p','$e','$ph','$g','$path')";
                $sql1="insert into login(username,password,type,status) values ('$u','$p','user','0')";
	   if(mysqli_query($conn,$sql))
       {
           if(mysqli_query($conn,$sql1))
               header("location:log/index.html");
       }
    }
?>
</body>
</html>