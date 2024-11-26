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
    $g=$_POST['gender'];
    $fname=$_FILES["image"]["name"];
    $path="avatar/".$fname;
    $ftemp=$_FILES["image"]["tmp_name"];
    move_uploaded_file($ftemp,$path);
    $a="SELECT * FROM reg"; 
    $sql=mysqli_query($conn,$a);
    while($row=mysqli_fetch_assoc($sql))
    {
    if($row['Uname']==$u)
    {
        echo "<script type='text/javascript'>alert('Username Already Exist..Try another one:-) ');
window.location='reg.html';
</script>";
        break;
    }
    }
    if($row['Uname']!=$u)
    {
        if(empty($fname))
        {
            $sql="insert into reg(Uname,Pass,Email,Phone,Gender,Image) values ('$u','$p','$e','$ph','$g','avatar/default.jpg')";   
        }
        else
        {
        $sql="insert into reg(Uname,Pass,Email,Phone,Gender,Image) values ('$u','$p','$e','$ph','$g','$path')";
        }
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