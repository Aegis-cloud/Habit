<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$cid=$_REQUEST['sid'];
 $con=new MySQLi("localhost","root","","habit");
$gn=$_POST['sid'];
 $na=$_POST['cname'];
	$ba=$_POST['text1'];
	$ca=$_POST['text2'];
  $sql = "update bill set orderid='$na',no_of_items='$ba',totalamount='$ca' where billid='$cid'";
   if($con->query($sql) === true){ 
   echo "<script type='text/javascript'>alert('Updated Successfully');
window.location='templatebillupdate.php';
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