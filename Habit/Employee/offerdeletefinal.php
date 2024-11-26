<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$cid=$_REQUEST['cid'];
include("connection.php");
  $sql = "Delete from offers where offerid=$cid";
   if(mysqli_query($conn,$sql) === TRUE)
   { 
   echo "<script type='text/javascript'>alert('Deleted Successfully');
window.location='templateofferdelete.php';
</script>";
} 
    else{ 
    echo "ERROR:".$sql;
    }


   

?>
</body>
</html>