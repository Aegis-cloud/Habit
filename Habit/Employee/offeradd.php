<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	$c2=$_POST['c_name'];
	$c3=$_POST['f_name'];
	$c4=$_POST['L_name'];
	$c5=$_POST['M_name'];
	$sql1="INSERT INTO offers(offerprice,offerdiscount,offeritem,id)
		VALUES('$c2','$c3','$c4','$c5')";
	if(mysqli_query($conn,$sql1))
   {
	echo "<script type='text/javascript'>alert('Deleted Successfully');
window.location='employeeofferadd.html';
</script>";
	}
	?>
	
</body>
</html>>