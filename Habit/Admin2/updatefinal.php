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
 
	extract($_POST);
  $sql ="Update employe set FIRST_NAME='$cname',SECOND_NAME='$sname',GENDER='$gender',HOUSE_NAME='$hname',POST_OFFICE='$poff',CITY='$city',JOIN_DATE='$jdate',DESIGNATION='$des',CONTACT_NO='$cno',EMAIL='$email' where EMP_ID=$cid";
	if(mysqli_query($conn,$sql) == true){ 
   echo "<script type='text/javascript'>alert('Update Successfully');
window.location='templateupdateone.php';
</script>";
} else{ 
    echo "ERROR:".$sql; }

?>

</body>
</html>