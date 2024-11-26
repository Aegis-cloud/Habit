<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$cid=$_POST['cid'];
 $con=new MySQLi("localhost","root","","tms");
   $sql_department = "SELECT * FROM employe where cid=$cid";
   $department_data = mysqli_query($con,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
      $departid = $row['cname'];
      $depart_name = $row['Description'];
	  echo $depart_name;
	  
?>
<form method="post" action="updatenew.php"><label>Cname</label>
<input type="text" value="<?php echo $row['cid']; ?>" name="cid">
<input type="text" name="cname" value="<?php echo $row['cname']; ?>">
<label>Description</label><input type="text" name="Des" value="<?php echo $row['Description']; ?>">
<input type="submit" name="update">
</form>
<?php }?>
</body>
</html>