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
 
  $sql = "Delete from supplier where SUPPLIER_ID=$cid" ;
   if($conn->query($sql) == true)
   { 
   echo "<script type='text/javascript'>alert('Deleted Successfully');
window.location='adminsupdelete.php';
</script>";
} else{ 
    echo "ERROR: Could not able to execute $sql. "  . $conn->error; }

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