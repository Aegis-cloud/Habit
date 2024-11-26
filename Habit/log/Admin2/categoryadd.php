<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	$c1=$_POST['c_id'];
	$c2=$_POST['c_name'];
	$sql1="INSERT INTO category(CATEGORY_ID,CATEGORY_NAME)
		VALUES('$c1','$c2')";
	if(mysqli_query($conn,$sql1))
   {
	echo "<script>alert('Inserted successfully');</script>";
            //redirect('adminempadd.html');
       header('location:admincatadd.html');
	}
	?>
	
</body>
</html>