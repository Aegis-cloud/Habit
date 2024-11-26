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
 
  $sql = "Delete from item where id=$cid";
   if($conn->query($sql) === true){ 
   echo "<script type='text/javascript'>alert('Deleted Successfully');
window.location='templateitemdelete.php';
</script>";
} else{ 
    echo "ERROR: Could not able to execute $sql. "  . $conn->error; }

$conn->close(); 

?>
</body>
</html>