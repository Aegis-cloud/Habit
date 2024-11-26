<?php
include('connection.php');
session_start();
$n=$_GET['name'];
$id=$_GET['id'];
$q=$_GET['quan'];
$a="Select * from item where id=$id";
$res=mysqli_query($conn,$a);
$row=mysqli_fetch_assoc($res);
if($q<$row['quan'])
{
$s=$q+1;
$u=$_SESSION['u'];
$sql="Update cart set item_quan=$s where item_name='$n' and Uname='$u'";
mysqli_query($conn,$sql);
}

header("location:cart.php"); 
?>