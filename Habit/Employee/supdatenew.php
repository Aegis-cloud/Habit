<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$cid=$_REQUEST['sid'];
 include('connection.php');
$gn=$_POST['sid'];
 $na=$_POST['cname'];
	$ba=$_POST['text1'];
	extract($_POST);
  $sql = "update sub_category set sub_name='$na',cat_id='$ba' where sub_id='$gn'";
   if($conn->query($sql) === true){ 
   echo "<script type='text/javascript'>alert('Updated Successfully');
window.location='templatesubupdate.php';
</script>";
} else{ 
    echo "ERROR: Could not able to execute $sql. "  . $conn->error; }

$conn->close(); 
   
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