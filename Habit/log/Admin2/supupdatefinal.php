<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$cid=$_REQUEST['cid'];
 include('connection.php');
 
	extract($_POST);
      
   
  $sql_department ="update supplier set SUPPLIER_NAME='$sname',HOUSE_NUMBER='$hno',STREET_NAME='$stname',STREET_TYPE='$stype',POST_OFFICE='$poff',CONTACT='$con',EMAIL='$mail'  where SUPPLIER_ID=$cid";
    $department_data = mysqli_query($conn,$sql_department);
	if($department_data == TRUE){ 
   echo "<script type='text/javascript'>alert('Update Successfully');
window.location='templatesupupdate.php';
</script>";
} else{ 
    echo "ERROR: Could not able to execute .$sql. "  . $con->error; }

$con->close(); 
   
   //$department_data = mysqli_query($con,$sql_department);
  // if($department_data) {
     // $departid = $row['cname'];
     // $depart_name = $row['Description'];
	 // echo "success";
  // }
  // else echo "error";
?>
</body>
</html>