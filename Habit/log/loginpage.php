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
	$p=$_POST['password'];
	$a="SELECT * FROM login where username='$u'";
	$r=mysqli_query($conn,$a);
    session_start();
    $_SESSION['u']=$u;
	$row=mysqli_fetch_array($r);
		if($u==$row["username"] && $p==$row["password"] )
        {
            $sql="update login set status='1' where username='$u'";
            mysqli_query($conn,$sql);
        if($row['type']=='user')
        	   header("location:../user.php");
        else if ($row['type']=='admin')
        	   header("location:../Admin/index.php");
        else if ($row['type']=='employee')
        	   header("location:../Employee/employee.html");
        }
        else
        {
            header("location:error/index.html");
        
        }
	
?>
</body>
</html>