<?php
session_start();
include('connection.php');
$u=$_SESSION['u'];
$sql="update login set status=0 where username='$u'";
mysqli_query($conn,$sql);
session_destroy();
header('Location:index.php');   

?>