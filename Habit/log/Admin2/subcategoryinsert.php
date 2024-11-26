<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	$e1=$_POST['e_id'];
	$e2=$_POST['f_name'];
	$e3=$_POST['s_name'];
		
	
	$sql1="INSERT INTO subcategory(sid,sname,cid)
		VALUES('$e1','$e2','$e3')";
    if(mysqli_query($conn,$sql1))
   {
	//echo "inserted succefully";
         //echo "<script type='text/javascript'>alert('Inserted Successfully')</script>";
            //redirect('adminempadd.html');
         echo "<script type='text/javascript'>alert('inserted Successfully');
window.location='adminempadd.html';
</script>";
       //header('location:adminempadd.html'); 
	}
	else
	{
		echo "error".$sql1."<br>".mysqli_error($conn);
	}
	
	?>
</body>
</html>