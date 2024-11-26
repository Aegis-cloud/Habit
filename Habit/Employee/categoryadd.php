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
    $c3=$_POST['supply'];
	$sql1="INSERT INTO category(cat_name,SUPPLIER_ID)
		VALUES('$c2','$c3')";
	if(mysqli_query($conn,$sql1))
   {
 echo "<script type='text/javascript'>alert('Inserted Successfully');
window.location='admincatadd.php';
</script>";
        
    
	}
	?>
	
</body>
</html>