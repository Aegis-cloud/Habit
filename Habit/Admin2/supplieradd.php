<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	$s2=$_POST['s_name'];
	$s3=$_POST['h_number'];
	$s4=$_POST['street'];
	$s5=$_POST['st_type'];
	$s6=$_POST['p_o'];
	$s7=$_POST['contact'];
	$s8=$_POST['mail'];
	 $sql1="INSERT INTO supplier(SUPPLIER_NAME,HOUSE_NUMBER,STREET_NAME,STREET_TYPE,POST_OFFICE,CONTACT,EMAIL)
 VALUES('$s2','$s3','$s4','$s5','$s6','$s7','$s8')";
  if(mysqli_query($conn,$sql1))
   {
 echo "<script type='text/javascript'>alert('Inserted Successfully');
window.location='adminsuplieradd.html';
</script>";
	}
	else
	{
		echo "error".$sql1."<br>".mysqli_error($conn);
	}
	
	?>
</html>