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
	$c3=$_POST['f_name'];
	$c4=$_POST['L_name'];
	$sql1="INSERT INTO bill(billid,orderid,no_of_items,totalamount)
		VALUES('$c1','$c2','$c3','$c4')";
	if(mysqli_query($conn,$sql1))
   {
	echo "<script>alert('Inserted successfully');</script>";
            //redirect('adminempadd.html');
       header('location:employeebilladd.html');
	}
	?>
	
</body>
</html>>