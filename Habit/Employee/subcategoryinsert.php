<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	$e2=$_POST['f_name'];
	$e3=$_POST['s_name'];
		
	
	$sql1="INSERT INTO sub_category(sub_name,cat_id)
		VALUES('$e2',$e3)";
    if(mysqli_query($conn,$sql1))
   {
         
         echo "<script type='text/javascript'>alert('inserted Successfully');
window.location='templatesubinsert.php';
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