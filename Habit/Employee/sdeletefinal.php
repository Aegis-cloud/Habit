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
 $na=$_POST['cname'];
  $sql = "Delete from sub_category where sub_id=$cid";
   if($conn->query($sql) === true){ 
   echo "<script type='text/javascript'>alert('Deleted Successfully');
window.location='templatesubdelete.php';
</script>";
} else{ 
    echo "ERROR: Could not able to execute $sql. "  . $conn->error; }
   
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