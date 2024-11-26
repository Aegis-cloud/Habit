<?php
include('connection.php');
session_start();
$n=$_GET['name'];
$q=$_GET['quan'];
$s=$q-1;
if($s>0)
{
$u=$_SESSION['u'];
$sql="Update cart set item_quan=$s where item_name='$n' and Uname='$u'";
mysqli_query($conn,$sql);
}
header("location:cart.php"); 
?>