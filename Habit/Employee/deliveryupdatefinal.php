<?php
$cid=$_REQUEST['fname'];
 include('connection.php');
 $des=$_POST['des'];
	
  $sql ="Update myorder set order_status='$des' where order_id=$cid";
	if($conn->query($sql) === true){ 
   echo "<script type='text/javascript'>alert('Update Successfully');
window.location='templatedeliveryupdate.php';
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
