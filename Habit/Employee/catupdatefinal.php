<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$cid=$_REQUEST['cid'];
include("connection.php");
	 $con=new MySQLi("localhost","root","","habit");
 
	extract($_POST);
  $sql ="Update category set 
  cat_name='$cname' where cat_id=$cid";
	if($con->query($sql) === true){ 
   echo "<script type='text/javascript'>alert('Update Successfully');
window.location='templatecatupdate.php';
</script>";
} else{ 
    echo "ERROR: Could not able to execute $sql. "  . $con->error; }

$con->close(); 

?>
</body>
</html>