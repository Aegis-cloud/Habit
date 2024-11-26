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
   $sql_department = "SELECT * FROM supplier where SUPPLIER_ID=$cid";
   $department_data = mysqli_query($con,$sql_department);
 while($row = mysqli_fetch_assoc($department_data) )
 {
      //$departid = $row['c'];
      //$depart_name = $row['Description'];
	  //echo $depart_name;
	  
?>
<form method="post" action="supupdatefinal.php"><label>SUPPLIER_ID</label>
<input type="text" value="<?php echo $row['SUPPLIER_ID']; ?>" name="cid"><BR><BR>
    <label>SUPPLIER_NAME</label>
<input type="text"   name="sname" value="<?php echo $row['SUPPLIER_NAME']; ?>"><BR><BR>
    <label>HOUSE NUMBER</label><input type="text" name="hno" value="<?php echo $row['HOUSE_NUMBER']; ?>"><BR><BR>
    <label>STREET NAME</label><input type="text" name="stname" value="<?php echo $row['STREET_NAME']; ?>"><BR><BR>
    <label>STREET TYPE</label><input type="text" name="stype" value="<?php echo $row['STREET_TYPE']; ?>"><BR><BR>
    <label>POST OFFICE</label><input type="text" name="poff" value="<?php echo $row['POST_OFFICE']; ?>"><BR><BR>
    <label>CONTACT NO</label><input type="text" name="con" value="<?php echo $row['CONTACT']; ?>"><BR><BR>
    <label>EMAIL</label><input type="text" name="mail" value="<?php echo $row['EMAIL']; ?>"><BR><BR>

<input type="submit" name="update value="UPDATE">
</form>
<?php }?>	
</body>
</html>