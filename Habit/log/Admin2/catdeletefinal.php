<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$cid=$_REQUEST['cid'];
 $con=new MySQLi("localhost","root","","tms");
 
  $sql = "Delete from category where CATEGORY_ID=$cid" ;
   if($con->query($sql) == true)
   { 
   echo "<script type='text/javascript'>alert('Deleted Successfully');
window.location='catdelete.php';
</script>";
} else{ 
    echo "ERROR: Could not able to execute $sql. "  . $con->error; }

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