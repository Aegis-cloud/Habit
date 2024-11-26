<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$cid=$_REQUEST['sid'];
include("connection.php");
$gn=$_POST['sid'];
 $na=$_POST['cname'];
	$ba=$_POST['text1'];
	$la=$_POST['text3'];
	
  $sql = "update offers set offerprice='$na',offerdiscount='$ba',id='$la' where offerid='$cid'";
   if(mysqli_query($conn,$sql) === true){ 
   echo "<script type='text/javascript'>alert('Updated Successfully');
window.location='templateofferupdate.php';
</script>";
} else{ 
    echo "ERROR: ".$sql; }


   
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