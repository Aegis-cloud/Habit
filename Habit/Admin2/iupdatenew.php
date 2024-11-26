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
	
	$ca=$_POST['price'];
	$da=$_POST['cat'];
	$ea=$_POST['quan'];
    $fa=$_POST['fabric'];
    $ga=$_POST['color'];
    $ha=$_POST['pattern'];
  $sql = "update item set name='$na',price=$ca,cat_id=$da,quan=$ea,fabric='$fa',color='$ga',pattern='$ha' where id='$gn'";
   if(mysqli_query($conn,$sql) === true){
     
   echo "<script type='text/javascript'>alert('Updated Successfully');
window.location='templateitemupdate.php';
</script>";
} else{ 
    echo "ERROR: Could not able to execute $sql. "  . $conn->error; }


   

?>
</body>
</html>