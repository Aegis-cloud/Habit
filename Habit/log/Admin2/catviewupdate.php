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
   $sql_department = "SELECT * FROM category where CATEGORY_ID=$cid";
   $department_data = mysqli_query($con,$sql_department);
 while($row = mysqli_fetch_assoc($department_data) )
 {
      //$departid = $row['c'];
      //$depart_name = $row['Description'];
	  //echo $depart_name;
	  
?>
<form method="post" action="catupdatefinal.php"><label>C_ID</label>
<input type="text" value="<?php echo $row['CATEGORY_ID']; ?>" name="cid"><BR><BR>
    <label>CATEGORY NAME</label>
<input type="text" name="cname" value="<?php echo $row['CATEGORY_NAME']; ?>"><BR><BR>
<input type="submit" name="update" value="Update">
</form>
<?php }?>	
</body>
</html>