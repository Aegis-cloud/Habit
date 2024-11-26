<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$cid=$_POST['cid'];
    echo $cid;
 $con=new MySQLi("localhost","root","","tms");
   $sql_department = "SELECT * FROM employe where EMP_ID=$cid";
   $department_data = mysqli_query($con,$sql_department);
 while($row = mysqli_fetch_assoc($department_data) ){
      //$departid = $row['c'];
      //$depart_name = $row['Description'];
	  //echo $depart_name;
	  
?>
<form method="post" action="deletefinal.php"><label>C_ID</label>
<input type="text" value="<?php echo $row['EMP_ID']; ?>" name="cid"><BR><BR>
    <label>FIRST NAME</label>
<input type="text" name="cname" value="<?php echo $row['FIRST_NAME']; ?>"><BR><BR>
<label>SECOND NAME</label><input type="text" name="Des" value="<?php echo $row['SECOND_NAME']; ?>"><BR><BR>
 <label>GENDER</label><input type="text" value="<?php echo $row['GENDER']; ?>"><BR><BR>
    <label>HOUSE NAME</label><input type="text" value="<?php echo $row['HOUSE_NAME']; ?>"> <BR><BR>
     <label>POST OFFICE</label><input type="text" value="<?php echo $row['POST_OFFICE']; ?>"> <BR><BR>
     <label>CITY</label><input type="text" value="<?php echo $row['CITY']; ?>"> <BR><BR>
     <label>JOIN DATE</label><input type="text" value="<?php echo $row['JOIN_DATE']; ?>"> <BR><BR>
     <label>DESIGNATION</label><input type="text" value="<?php echo $row['DESIGNATION']; ?>"> <BR><BR>
     <label>CONTACT NO</label><input type="text" value="<?php echo $row['CONTACT_NO']; ?>"> <BR><BR>
     <label>EMAIL</label><input type="text" value="<?php echo $row['EMAIL']; ?>"> <BR><BR>
<input type="submit" name="delete" value="Delete">
</form>
<?php }?>
</body>
</html>